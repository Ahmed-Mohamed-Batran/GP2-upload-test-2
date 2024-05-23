<?php
// Database connection settings
$DATABASE_HOST = 'localhost:3307';
$DATABASE_USER = 'root';
$DATABASE_PASS = ''; // Update with your actual password
$DATABASE_NAME = 'yu_space';

// Connect to the database
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: '. mysqli_connect_error());
}

// Check if the form was submitted
if (!isset($_POST['email'], $_POST['password'], $_POST['role'])) {
    exit('Please complete the registration form!');
}

// Validate the form inputs
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['role'])) {
    exit('Please complete the registration form');
}

// Prepare and bind the SQL statement to check if the username/email already exists
if ($stmt = $con->prepare('SELECT id FROM users WHERE email =?')) {
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo 'Email already exists, please choose another!';
    } else {
        // Hash the password using PHP's built-in password_hash function
        $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        // Insert the new user into the database
        $stmt = $con->prepare('INSERT INTO users (email, password, role) VALUES (?,?,?)');
        $stmt->bind_param('sss', $_POST['email'], $hashed_password, $_POST['role']);
        $stmt->execute();
        
        echo 'Registration successful!';
    }
    
    $stmt->close();
} else {
    echo 'Could not prepare statement!';
}

$con->close();
?>
