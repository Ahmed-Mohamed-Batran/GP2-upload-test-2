document.getElementById('updateForm').addEventListener('submit', function(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Create a FormData object
    var formData = new FormData(this);

    // Use fetch to submit the form data asynchronously
    fetch(this.action, {
        method: 'POST',
        body: formData
    })
   .then(response => {
        if (response.ok) {
            // Handle success
            alert('PDF updated successfully!');
            //  refresh the current page
            window.location.reload();
        } else {
            // Handle error
            alert('Error updating PDF.');
        }
    })
   .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
});