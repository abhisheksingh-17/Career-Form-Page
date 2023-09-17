<?php
// Database connection details
$hostname = 'localhost'; // Replace with your actual hostname
$username = 'u221021521_admin'; // Replace with your actual database username
$password = 'Hashmatic@123'; // Replace with your actual database password
$database = 'u221021521_Application'; // Replace with your actual database name

// Create a connection to the database
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $graduation = $_POST['graduation'];
    $skills = $_POST['skill'];
    $linkedin = $_POST['linkedin'];
    $experience = $_POST['experience'];
    $employer = $_POST['employer'];
    $ctc = $_POST['ctc'];
    $notice = $_POST['notice'];
    $job_role = $_POST['job_role'];
    $vacancy = $_POST['vacancy'];
    $address = $_POST['address'];

    // Handle file upload
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] == UPLOAD_ERR_OK) {
        // Define a directory to store uploaded files
        $upload_dir = 'uploads/'; // You need to create this directory in your web server

        // Generate a unique filename for the uploaded file
        $uploaded_file = $upload_dir . uniqid() . '_' . $_FILES['upload']['name'];

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploaded_file)) {
            // File uploaded successfully, you can now store $uploaded_file in your database
        } else {
            // Handle the case where the file couldn't be moved
            echo "Error uploading file.";
        }
    } else {
        // Handle the case where no file was uploaded or an error occurred during upload
        echo "No file uploaded or an error occurred.";
    }

    // Insert data into the database
    $sql = "INSERT INTO form (FName, LName, Email, Contact, Gender, Graduation, Skill, LinkedIn, Experience, Employer, CTC, Notice, Role, Medium, Address, CV) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssssssssssssssss", $first_name, $last_name, $email, $contact, $gender, $graduation, $skills, $linkedin, $experience, $employer, $ctc, $notice, $job_role, $vacancy, $address, $uploaded_file);
    
    if ($stmt->execute()) {
        // Data inserted successfully
        $stmt->close();
        $mysqli->close();

        // Redirect to the thank you page
        header('Location: thank.html');
        exit();
    } else {
        // Error in executing the query
        echo "Error: " . $stmt->error;
        $stmt->close();
        $mysqli->close();
    }
}
?>
