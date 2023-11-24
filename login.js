function submitForm() {
    // Get form data
    var form = document.getElementById("loginForm");
    var formData = new FormData(form);

    // Send form data to the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.onload = function () {
        if (xhr.status == 200) {
            // Check the response from the server
            if (xhr.responseText.trim() === "success") {
                // Redirect to index.php if login is successful
                window.location.href = "index.php";
            } else {
                // Display an error message
                alert("Login failed. Please check your credentials.");
            }
        }
    };
    xhr.send(formData);
}