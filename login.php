<?php
session_start();
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "yu_space";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

// Attempt to find the user
$sql = "SELECT * FROM users WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Password is correct, generate OTP
        $otp = rand(100000, 999999);
        // Store the OTP in the database
        $updateSql = "UPDATE users SET otp=? WHERE email=?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param('si', $otp, $email);
        $updateStmt->execute();
        
        // Retrieve the OTP for display
        $selectSql = "SELECT otp FROM users WHERE email=?";
        $selectStmt = $conn->prepare($selectSql);
        $selectStmt->bind_param('s', $email);
        $selectStmt->execute();
        $selectResult = $selectStmt->get_result();
        $selectedRow = $selectResult->fetch_assoc();
        $displayOtp = $selectedRow['otp'];
        
        // Determine the user's role
        $role = $row['role']; // Ensure 'role' column exists and is correctly set

        // Output the OTP for display
        echo json_encode(['otp' => $displayOtp, 'role' => $role]);
    } else {
        echo "Invalid email or password.";
    }
} else {
    echo "Invalid email or password.";
}

$stmt->close();
$updateStmt->close();
$selectStmt->close();
$conn->close();
?>
