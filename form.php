<?php
// Database connection details
$hostname = 'localhost'; // Replace with your actual hostname
$username = 'root'; // Replace with your actual database username
$password = '@abhi$17'; // Replace with your actual database password
$database = 'form'; // Replace with your actual database name

// Function to establish a database connection
function connectToDatabase($hostname, $username, $password, $database)
{
    $mysqli = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    return $mysqli;
}

// Function to handle the request method
function handleRequestMethod()
{
    if (!isset($_SERVER['REQUEST_METHOD'])) {
        // Handle the case where REQUEST_METHOD is not set
        $errorMessage = "Please call index.html first to verify the POST call";
        trigger_error($errorMessage, E_USER_ERROR);
    }
}

// Function to handle form submission
function handleFormSubmission($mysqli)
{
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
        $uploaded_file = handleFileUpload();

        // Insert data into the database using prepared statements
        if (insertDataIntoDatabase($mysqli, $first_name, $last_name, $email, $contact, $gender, $graduation, $skills, $linkedin, $experience, $employer, $ctc, $notice, $job_role, $vacancy, $address, $uploaded_file)) {
            // Data inserted successfully
            // Redirect to the thank-you page
            header('Location: thank.html');
            exit();
        } else {
            // Error in executing the query
            echo "Error in form submission.";
        }
    }
}

// Function to handle file upload
function handleFileUpload()
{
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/'; // You need to create this directory in your web server
        $uploaded_file = $upload_dir . uniqid() . '_' . $_FILES['upload']['name'];

        if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploaded_file)) {
            return $uploaded_file;
        } else {
            echo "Error uploading file.";
            return null;
        }
    } else {
        echo "No file uploaded or an error occurred.";
        return null;
    }
}

// Function to insert data into the database using prepared statements
function insertDataIntoDatabase($mysqli, $first_name, $last_name, $email, $contact, $gender, $graduation, $skills, $linkedin, $experience, $employer, $ctc, $notice, $job_role, $vacancy, $address, $uploaded_file)
{
    $sql = "INSERT INTO application (FName, LName, Email, Contact, Gender, Graduation, Skill, LinkedIn, Experience, Employer, CTC, Notice, Role, Medium, Address, CV) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        echo "Error in preparing the query.";
        return false;
    }

    $stmt->bind_param("ssssssssssssssss", $first_name, $last_name, $email, $contact, $gender, $graduation, $skills, $linkedin, $experience, $employer, $ctc, $notice, $job_role, $vacancy, $address, $uploaded_file);

    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        echo "Error: " . $stmt->error;
        $stmt->close();
        return false;
    }
}

// Main program flow
$mysqli = connectToDatabase($hostname, $username, $password, $database);
handleRequestMethod();
handleFormSubmission($mysqli);
$mysqli->close();
?>
