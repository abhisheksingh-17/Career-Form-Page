
# Career Form Section 

The "Career Form Section" project is a web-based job application form designed to simplify and streamline the job application process. It provides an efficient and user-friendly platform for job seekers to submit their applications and for employers to collect and manage applicant data.

Project Overview

In today's competitive job market, providing a seamless and professional application experience is crucial. The Career Form project offers the following key features:

 - User-Friendly Interface: An intuitive web form that guides applicants through the application process, ensuring completeness and accuracy.

 - Document Upload: Applicants can easily upload their resumes (CVs) in PDF format, allowing employers to assess their qualifications.

 - Data Storage: All applicant data is securely stored in a database, making it convenient for employers to review and process applications.

 - Validation: Comprehensive data validation prevents incomplete or incorrect submissions, saving time for both applicants and employers.

Why Career Form?

 - Efficiency: By automating the application process, Career Form reduces administrative overhead and speeds up hiring.

 - Accuracy: Validation checks ensure that employers receive complete and accurate applicant information.

 - Professionalism: A well-designed form reflects positively on your organization and enhances the applicant experience.

The Career Form Section project is designed to enhance the hiring process, making it more efficient, accurate, and professional.


## Table Of Contents

 - [Installation](https://github.com/abhisheksingh-17/Career-Form-Page/tree/main#installation)
 - [Usage](https://github.com/abhisheksingh-17/Career-Form-Page/tree/main#usage)
 - [Acknowledgements](https://github.com/abhisheksingh-17/Career-Form-Page/tree/main#acknowledgements)
 - [Technologies Used](https://github.com/abhisheksingh-17/Career-Form-Page/tree/main#technologies-used)
 - [Code Description](https://github.com/abhisheksingh-17/Career-Form-Page/tree/main#code-description)
 - [Screenshots](https://github.com/abhisheksingh-17/Career-Form-Page/tree/main#screenshots)
 - [Future Scope](https://github.com/abhisheksingh-17/Career-Form-Page/tree/main#future-scope)
 - [Contributing](https://github.com/abhisheksingh-17/Career-Form-Page/tree/main#contributing)
 - [License](https://github.com/abhisheksingh-17/Career-Form-Page/tree/main#license)
## Installation

To set up the Career Form project locally or on a web server, follow these steps:

Prerequisites-

 - Web Server: Ensure you have access to a web server or a local development environment. You can use solutions like XAMPP, WAMP, MAMP, or a cloud-based hosting service.

 - Database: You'll need a MySQL database to store applicant data. Make sure you have database credentials (hostname, username, password) ready.

Installation Steps-

1.Clone the Repository:

  - Clone this repository to your local machine or server using Git:
 
 ```bash
 git clone https://github.com/abhisheksingh-17/Landing-Page-Section.git
 ```
 - Once the cloning process is complete, you'll have a local copy of the project.

 - Navigate to the Project Folder:

 - Change your working directory to the "Career Form Section" folder within the "Landing Page Section" repository:

```bash
cd "Landing-Page-Section-Main/Career Form Section"
```

 - Open the Project: Use your preferred code editor to open the project files.

2.Database Setup:

 - Create a new database using your preferred MySQL database management tool or the command line. You can use the provided database.sql file to create the necessary tables and structure.

```sql
-- Create a database named 'form' (if it doesn't already exist)
CREATE DATABASE IF NOT EXISTS form;

-- Use the 'form' database
USE form;

-- Create a table to store job applications
CREATE TABLE IF NOT EXISTS application (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    FName VARCHAR(255) NOT NULL,
    LName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Contact VARCHAR(10) NOT NULL,
    Gender VARCHAR(20) NOT NULL,
    Graduation DATE NOT NULL,
    Skill VARCHAR(255) NOT NULL,
    LinkedIn VARCHAR(255) NOT NULL,
    Experience VARCHAR(20) NOT NULL,
    Employer VARCHAR(255) NOT NULL,
    CTC VARCHAR(20) NOT NULL,
    Notice VARCHAR(20) NOT NULL,
    Role VARCHAR(255) NOT NULL,
    Medium VARCHAR(255) NOT NULL,
    Address TEXT NOT NULL,
    CV VARCHAR(255) NOT NULL
);
```

 - Update the database connection details in the form.php file to match your MySQL credentials:

 ```php
$hostname = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database_name';
```
3.Web Server Configuration:

 - If you're using a local development environment, ensure that your web server (e.g., Apache) and PHP are properly configured.

4.File Permissions:

 - Make sure that the uploads directory has the necessary write permissions to allow file uploads.

5.Access the Application:

 - Open a web browser and navigate to the project folder on your server or localhost (e.g., http://localhost/career-form).

 - Through Command-
 
 ```bash
 start index.html
 ```

 - You should see the job application form. Fill out the form and submit it for testing.

6.Php Configuration:
 - Make sure that in your system php is installed correctly.You can also check the version through cmd.

 ```bash
 php --version
 ```

 - If your data will not store to the database or you not able to see the thank you page after hit on submit application make sure that your device having an issue with php configuration to check it first run the php file-

```bash
php form.php
```
 - If you encounter any issues then please resolve it.Problem is not in the code it is in your php configuration environment.

7.Customization (Optional):

 - Customize the form fields, validation rules, and styling in the HTML, CSS, and JavaScript files to match your specific requirements.

8.Deployment (Production):

 - If you plan to use this form in a production environment, ensure that your web server is properly configured for security and performance.

 - Consider using HTTPS for secure data transmission.

9.Testing:

 - Thoroughly test the application to ensure that it meets your needs and functions as expected.

Now you have the Career Form project up and running on your server or local environment, ready for job applicants to use. Customize it further as needed to match your organization's branding and specific job application requirements.

## Usage

The Career Form is designed to simplify the job application process for both applicants and employers. Follow these steps to use the application effectively:

1.Access the Form:

 - Open a web browser and navigate to the URL where the Career Form is hosted or installed.
Complete the Application:

 - Applicants should fill out the form with their personal details, qualifications, and preferences.

 - Ensure that all mandatory fields (marked with asterisks) are properly filled.

2.Upload a Resume:

 - Applicants can upload their CV or resume in PDF format using the "Upload Your CV" field.

 - The application validates that only PDF files are accepted for upload.

3.Submit the Application:

 - After filling out the form and attaching a resume, applicants can click the "Submit Application" button.

 - The form validates the data and ensures it meets the specified criteria (e.g., valid email address, phone number, LinkedIn URL, etc.).

4.Confirmation:

 - Upon successful submission, applicants will redirect to the confirmation message page, indicating that their application has been submitted.

5.Data Storage:

 - Applicant data is stored in a MySQL database for future reference and review by employers.

6.Employer Access:

 - Employers or HR personnel can access the stored applicant data by querying the database or using a custom application interface.

7.Review and Selection:

 - Employers can review applicant data, including resumes, to shortlist candidates for further evaluation.

8.Customization:

 - Customize the application form fields, validation rules, and styling to match your organization's specific requirements by modifying the HTML, CSS, and JavaScript files.

9.Security and Privacy:

 - Ensure that you have appropriate security measures in place to protect applicant data and comply with data privacy regulations.

10.Deployment:

 - Deploy the application in your organization's infrastructure or on a web hosting platform, making it accessible to job seekers.

The Career Form provides a user-friendly and efficient way for applicants to submit their information and for employers to manage job applications effectively.
## Acknowledgements

I would like to express my gratitude to the following individuals and communities for their contributions and support during the development of the Career Form application:

 - Open Source Community: I extend my thanks to the open-source community for providing valuable resources, libraries, and tools that were instrumental in building this project.

 - Stack Overflow: A special acknowledgment to the Stack Overflow community for their extensive knowledge sharing and assistance in resolving technical challenges.

 - MySQL: My appreciation goes to the MySQL development team for creating a robust database management system that powered the data storage for this project.

 - Users and Contributors: Last but not least, I thank all the users and potential contributors who find value in this project. Your feedback and suggestions are invaluable in driving improvements.

This project would not have been possible without the collective efforts and resources of these individuals and communities.
## Technologies Used

The Career Form application leverages a variety of technologies and tools to provide a seamless and efficient job application experience. These technologies include:

 - HTML: The application's frontend is built using HTML, providing a structured and interactive user interface.

 - CSS: CSS is used for styling the application, ensuring an appealing and responsive design across different devices.

 - JavaScript: JavaScript is employed for client-side validation, enhancing user experience and ensuring data accuracy.

 - PHP: PHP handles server-side scripting and form submission, enabling seamless data processing and database interactions.

 - MySQL: The application utilizes MySQL as its relational database management system to store and manage job application data efficiently.

 - Git: Git is used for version control and tracking changes in the project's codebase.

 - GitHub: GitHub serves as the version control and collaboration platform for the project, facilitating code management and collaboration among developers.

 - File Upload Handling: PHP is used for handling file uploads, ensuring secure and efficient storage of CVs.

These technologies work cohesively to deliver a user-friendly, reliable, and feature-rich job application platform.




 

 


## Code Description

1.HTML Structure (index.html):

 - The HTML file index.html provides the structure for the job application form.

 - It defines form elements such as text inputs, dropdowns, and file upload fields.

 - Input fields are marked as required to ensure data completeness.

 - JavaScript validation functions are linked to form elements for real-time validation.

2.Client-Side Validation (validation.js)

 - The JavaScript file validation.js contains client-side validation functions.

 - It validates user inputs for fields such as first name, last name, email, phone number, LinkedIn URL, and file upload.

 - Error messages are displayed in real-time, providing immediate feedback to users.

 - The form is prevented from submission if any validation errors occur.

Explain through code-

```javascript
function validateFirstName(first_name) {
  if (first_name.trim() === "") {
    return "First name is required.<br>";
  }
  if (/^\d+$/.test(first_name)) {
    return "First name should not contain numbers.<br>";
  }
  return "";
}
```
 - validateFirstName is a function that takes the first_name as its parameter.

  -The first condition checks if the first_name is empty or consists only of whitespace characters. If it's empty or contains only spaces, it returns an error message indicating that the "First name is required."

 - The second condition uses a regular expression (/^\d+$/) to test if the first_name contains only digits (numbers). If it does, it returns an error message stating that the "First name should not contain numbers."

 - If neither of the above conditions is met, the function returns an empty string "", indicating that there are no validation errors for the "First Name" field.

```javascript
function validateEmail(email) {
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!emailPattern.test(email)) {
    return "Enter a valid email address.<br>";
  }
  return "";
}
```
 - validateEmail is a function that takes the email as its parameter.

 - It defines a regular expression pattern emailPattern to validate email addresses. This pattern checks for valid email formats, including letters, numbers, dots, hyphens, and the "@" symbol, with a valid domain.

 - The function then tests if the email parameter matches the emailPattern. If the email is not valid according to the pattern, it returns an error message stating "Enter a valid email address." Otherwise, it returns an empty string to indicate that there are no validation errors for the "Email" field.

```javascript
 function validateContact(contact) {
  const phonePattern = /^[0-9]{10}$/; // Assuming a 10-digit phone number
  if (!phonePattern.test(contact)) {
    return "Enter a valid phone number (10 digits).<br>";
  }
  return "";
}
```

 - validateContact is a function that takes the contact as its parameter.

 - It defines a regular expression pattern phonePattern to validate a 10-digit phone number. This pattern checks if the contact consists of exactly 10 numeric digits.

 - The function then tests if the contact parameter matches the phonePattern. If the phone number is not valid according to the pattern, it returns an error message stating "Enter a valid phone number (10 digits)." Otherwise, it returns an empty string to indicate that there are no validation errors for the "Contact" field.

```javascript
function validateLinkedIn(linkedin) {
  const urlPattern = /^(https?:\/\/)?(www\.)?linkedin\.com\/in\/[A-Za-z0-9_-]+\/?$/;
  if (!urlPattern.test(linkedin)) {
    return "Enter a valid LinkedIn URL.<br>";
  }
  return "";
}
```
 - validateLinkedIn is a function that takes the linkedin parameter, which is expected to be a LinkedIn URL.

 - It defines a regular expression pattern urlPattern to validate LinkedIn profile URLs. Here's what the pattern does:

 - (https?:\/\/)?: This part of the pattern matches the beginning of the URL, allowing for both HTTP and HTTPS protocols (the s? makes the 's' optional). The :\/\/ matches the colon and two slashes.

 - (www\.)?: This part allows for an optional "www." subdomain in the URL.

 - linkedin\.com\/in\/: This part matches the LinkedIn domain followed by "/in/".

 - [A-Za-z0-9_-]+: This part of the pattern matches the actual LinkedIn profile identifier. It allows for one or more alphanumeric characters, underscores, and hyphens in the profile identifier.

 - \/?$: This part matches an optional trailing slash at the end of the URL.

 - The function then tests if the linkedin parameter matches the urlPattern. If the LinkedIn URL does not match the expected pattern, it returns an error message stating "Enter a valid LinkedIn URL."<br> Otherwise, it returns an empty string to indicate that there are no validation errors for the "LinkedIn" field.

```javascript
const fileExtension = upload.split('.').pop().toLowerCase();
```
 - upload is the name of the uploaded file, which is passed as an argument to this line of code.

 - .split('.') is used to split the file name into an array of substrings, using the period (.) as the delimiter. This effectively separates the file name into two parts: the part before the last period (which may contain the file name and additional periods) and the file extension (the part after the last period).

 - .pop() is used to retrieve the last element from the array created by .split('.'). In this context, it extracts the file extension, as it is the last part of the array.

 - .toLowerCase() is applied to the extracted file extension to ensure that it is in lowercase. This is typically done because file extensions are case-insensitive on most systems, and converting them to lowercase helps with consistency when comparing or working with file extensions.

```javascript
function validateForm() {
  // Retrieve values from form fields
  const firstName = document.getElementById("first_name").value;
  const lastName = document.getElementById("last_name").value;
  ....
  const uploadInput = document.getElementById("upload");

  // Get the selected file from the file input
  const upload = uploadInput.files[0];

  // Initialize the error message container
  const errorMessages = document.getElementById("errorMessages");
  errorMessages.innerHTML = "";
}
```
 - The function starts by retrieving values from various form fields using document.getElementById() and .value. These fields include the first name, last name, email, contact, graduation, skill, linkedin, employer, and the file input element for uploading a file.

 - It also retrieves the selected file from the file input using uploadInput.files[0]. This line assumes that the form has an input field with the ID "upload" for uploading files.

 - An error message container with the ID "errorMessages" is initialized. This container is where error messages will be displayed if any validation errors occur. The .innerHTML property is set to an empty string to clear any previous error messages.

The purpose of this function is to prepare the data from the form fields for validation and error handling. The actual validation logic is performed in subsequent code that you've provided, where each form field is validated individually by calling the appropriate validation functions, and any error messages are accumulated and displayed in the "errorMessages" container. If there are no validation errors, the form submission is allowed; otherwise, error messages are displayed to the user, and form submission is prevented.

```javascript
let errorMessage = "";
errorMessage += validateFirstName(firstName);
errorMessage += validateLastName(lastName);
errorMessage += validateEmail(email);
errorMessage += validateContact(contact);
errorMessage += validateGraduation(graduation);
errorMessage += validateSkill(skill);
errorMessage += validateLinkedIn(linkedin);
errorMessage += validateEmployer(employer);
errorMessage += validateUpload(upload.name); // Pass the file name for validation
```
 - An empty string errorMessage is initialized to store any validation error messages.

 - Each form field is validated by calling the corresponding validation function (e.g., validateFirstName(firstName)). The result of each validation function is a string message. If there's no error, the result is an empty string; otherwise, it contains an error message.

 - The error messages from each validation function are accumulated in the errorMessage variable using the += operator. This means that if there are multiple validation errors, they will all be combined into a single string.

```javascript
// Display error messages
if (errorMessage !== "") {
  errorMessages.style.color = "red";
  errorMessages.innerHTML = errorMessage;
  return false; // Prevent form submission
}

// Form is valid, allow submission
return true;
```
It checks if the errorMessage variable is not an empty string. If there are any validation errors (i.e., errorMessage is not empty), it proceeds with the following actions:

 - It sets the text color of the "errorMessages" container to red using errorMessages.style.color = "red". This makes the error messages stand out.

 - It sets the inner HTML of the "errorMessages" container to the accumulated error messages stored in the errorMessage variable using errorMessages.innerHTML = errorMessage.

 - Finally, it returns false to prevent the form from being submitted, as there are validation errors.

If there are no validation errors (i.e., errorMessage is an empty string), it allows the form to be submitted by returning true.

In summary, this code section validates all form fields and accumulates error messages. If there are validation errors, it displays them in the "errorMessages" container and prevents form submission. If there are no errors, it allows the form to be submitted.

3.Server-Side Handling (form.php)

 - The PHP file form.php handles server-side form submission and data processing.

 - It establishes a database connection and checks if the form has been submitted.

 - Form data, including uploaded CVs, is processed and inserted into a MySQL database.

 - File uploads are securely handled, and unique filenames are generated for storage.

 - Users are redirected to a thank-you page upon successful submission.

Explain through code-

a.Database Connection Details:

```php
$hostname = 'localhost'; // Replace with your actual hostname
$username = 'root';      // Replace with your actual database username
$password = '@abhi$17';  // Replace with your actual database password
$database = 'form';      // Replace with your actual database name
```
These variables store the database connection details. You should replace the placeholders with your actual database credentials.

b.Function to Establish a Database Connection (connectToDatabase):

```php
function connectToDatabase($hostname, $username, $password, $database)
{
    $mysqli = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    return $mysqli;
}
```
This function establishes a connection to the MySQL database using the provided credentials. If the connection fails, it terminates the script with an error message.

More in detail:

 - function connectToDatabase($hostname, $username, $password, $database): This line defines a PHP function named connectToDatabase that takes four parameters: $hostname, $username, $password, and $database. These parameters represent the hostname, username, password, and the name of the database to connect to.

 - $mysqli = new mysqli($hostname, $username, $password, $database);: In this line, a new instance of the MySQLi (MySQL Improved) class is created and stored in the variable $mysqli. This instance is used for establishing a connection to the MySQL database.

 - new mysqli(...): This part of the line is creating a new instance of the mysqli class, which is a built-in PHP class for interacting with MySQL databases.

 - The four parameters passed to mysqli are:
$hostname: The hostname of the MySQL server.
$username: The username used to authenticate with the MySQL server.
$password: The password used to authenticate with the MySQL server.
$database: The name of the MySQL database to connect to.

 - if ($mysqli->connect_error) {: This line begins an if statement that checks if there was an error while establishing the database connection.

 - die("Connection failed: " . $mysqli->connect_error);: If there was an error in establishing the database connection, this line uses the die function to terminate the script and display an error message. The error message is constructed by concatenating the string "Connection failed: " with the error message obtained from $mysqli->connect_error. This message will be displayed to the user, and script execution will stop.

 - return $mysqli;: If the database connection was successfully established, this line returns the $mysqli object. This allows the calling code to use this database connection object to perform various database operations.

In summary, this connectToDatabase function is responsible for creating a connection to a MySQL database using the provided connection details. If the connection fails, it terminates the script with an error message. If successful, it returns the MySQLi object, which can be used for subsequent database queries and operations

c.Function to Handle the Request Method (handleRequestMethod):

```php
function handleRequestMethod()
{
    if (!isset($_SERVER['REQUEST_METHOD'])) {
        // Handle the case where REQUEST_METHOD is not set
        $errorMessage = "Please call index.html first to verify the POST call";
        trigger_error($errorMessage, E_USER_ERROR);
    }
}

```
This function checks if the REQUEST_METHOD is set. It's used to ensure that the script is called with a POST request.

More in detail:

 - function handleRequestMethod(): This line defines a PHP function named handleRequestMethod. This function doesn't take any parameters.

 - if (!isset($_SERVER['REQUEST_METHOD'])) {: This line begins an if statement that checks if the $_SERVER superglobal array contains a key named 'REQUEST_METHOD' and whether it is set.

 - $_SERVER is a PHP superglobal array that contains various server-related information.

 - 'REQUEST_METHOD' is a key in $_SERVER that typically holds the HTTP request method used in the current request (e.g., 'GET', 'POST', 'PUT', etc.)..

 - $errorMessage = "Please call index.html first to verify the POST call";: In this line, a variable named $errorMessage is assigned a string value. This string is a custom error message that indicates that the REQUEST_METHOD is not set and suggests that the user should call index.html first to verify the POST call.

 - trigger_error($errorMessage, E_USER_ERROR);: This line uses the trigger_error function to generate a user-level error message with the custom error message stored in the $errorMessage variable. The second argument, E_USER_ERROR, specifies the error type as a user-generated error that should halt script execution.

 - trigger_error is a PHP function that generates a user-level error message and can be used to handle exceptional situations.

In summary, the handleRequestMethod function is designed to check whether the REQUEST_METHOD is set in the server's environment. If it's not set, indicating that the function is being called in a context where the HTTP request method is expected to be set (e.g., a POST request), it generates a user-level error message and halts script execution with a custom error message. This function is useful for ensuring that the script is being used as expected and that the appropriate HTTP request method has been used.

d.Function to Handle Form Submission (handleFormSubmission):

```php
function handleFormSubmission($mysqli)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data (variables for form fields)
        // ...

        // Handle file upload
        $uploaded_file = handleFileUpload();

        // Insert data into the database using prepared statements
        if (insertDataIntoDatabase($mysqli, $first_name, $last_name, /* ... */, $uploaded_file)) {
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
```
This function is responsible for handling form submissions. It checks if the script is accessed via a POST request and then processes the form data and handles file uploads. It calls the insertDataIntoDatabase function to insert data into the database

More in detail:

 - function handleFormSubmission($mysqli): This line defines a PHP function named handleFormSubmission that takes one parameter, $mysqli, which is a MySQL database connection. This function is responsible for processing form submissions.

 - if ($_SERVER["REQUEST_METHOD"] == "POST") : This line begins an if statement that checks if the HTTP request method, obtained from the $_SERVER superglobal as 'REQUEST_METHOD', is equal to "POST". This condition is used to determine if the form has been submitted using the POST method.

 - $_SERVER["REQUEST_METHOD"] retrieves the HTTP request method used in the current request..

 - The lines from $first_name = $_POST['first_name']; to $address = $_POST['address']; retrieve form input data from the $_POST superglobal and store it in corresponding variables. Each variable represents a form field, such as first name, last name, email, etc.

 - For example, $first_name = $_POST['first_name']; assigns the value of the 'first_name' form field to the $first_name variable.

 - $uploaded_file = handleFileUpload();: This line calls the handleFileUpload function to handle the uploaded file (if any) and stores the result in the $uploaded_file variable.

 - The next block of code within the if statement is responsible for inserting the form data into the database using prepared statements.

 - insertDataIntoDatabase is called with the database connection ($mysqli) and all the form data as arguments.

 - If the insertion is successful (the function returns true), it redirects the user to the 'thank.html' page using the header function and exits the script.

 - If there is an error during the insertion, it displays an error message.

In summary, the handleFormSubmission function checks if the HTTP request method is POST, retrieves form data, handles file uploads, and inserts the form data into a database using prepared statements. If the insertion is successful, it redirects the user to a thank-you page, and if there is an error, it displays an error message. This function is responsible for processing form submissions from the 'index.html' form

e.Function to Handle File Upload (handleFileUpload):

```php
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
```

This function handles file uploads. It checks if a file has been uploaded, generates a unique filename, moves the file to a specified directory, and returns the uploaded file's path.

More in detail-

 - function handleFileUpload(): This line defines a PHP function named handleFileUpload with no parameters. This function is responsible for handling the file upload process.

 - if (isset($_FILES['upload']) && $_FILES['upload']['error'] == UPLOAD_ERR_OK) {: This line begins an if statement that checks if a file with the name 'upload' has been uploaded and if there are no errors associated with the file upload. This condition ensures that a file has been selected for upload and that there are no errors during the upload process.

 - isset($_FILES['upload']) checks if the 'upload' file input field exists in the form data.

 - $_FILES['upload']['error'] == UPLOAD_ERR_OK checks if there are no errors associated with the uploaded file.

 - $upload_dir = 'uploads/';: This line defines a variable $upload_dir and assigns it the value 'uploads/'. This is the directory where uploaded files will be stored. You need to create this directory on your web server for the file upload to work.

 - $uploaded_file = $upload_dir .. : This line generates a unique filename for the uploaded file. It combines the $upload_dir path, a unique identifier (uniqid()), an underscore '_', and the original filename of the uploaded file ($_FILES['upload']['name']). This ensures that each uploaded file has a unique name in the 'uploads/' directory.

 - if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploaded_file)) {: This line uses the move_uploaded_file function to move the uploaded file from its temporary location ($_FILES['upload']['tmp_name']) to the desired destination ($uploaded_file).

 - If the file is successfully moved, the code within this block executes.

 - return $uploaded_file;: If the file upload and move are successful, this line returns the path to the newly uploaded file.

In summary, the handleFileUpload function checks if a file has been uploaded and if there are no errors during the upload process. If these conditions are met, it generates a unique filename, moves the uploaded file to the 'uploads/' directory, and returns the path to the uploaded file. If there is an error, it displays an error message and returns null. This function is responsible for handling the file upload process in the form submission.

f.Function to Insert Data Into the Database (insertDataIntoDatabase):

```php
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
```
This function prepares an SQL statement with placeholders for data insertion. It binds the form data to the SQL statement and executes it using prepared statements to prevent SQL injection.

More in detail:

 - function insertDataIntoDatabase($mysqli, $first_name, $last_name, $email, $contact, $gender, $graduation, $skills, $linkedin, $experience, $employer, $ctc, $notice, $job_role, $vacancy, $address, $uploaded_file): This line defines a PHP function named insertDataIntoDatabase that takes several parameters, including a database connection object ($mysqli) and various form data fields.

 - $sql = "INSERT INTO application (FName, LName, Email, Contact, Gender, Graduation, Skill, LinkedIn, Experience, Employer, CTC, Notice, Role, Medium, Address, CV) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";: This line defines an SQL query ($sql) for inserting data into the 'application' table using prepared statements. It uses placeholders (?) for values that will be bound later.

 - $stmt = $mysqli->prepare($sql);: This line prepares the SQL statement for execution using the prepare method of the database connection object $mysqli. It returns a prepared statement object ($stmt) that will be used for executing the query.

 - $stmt->bind_param("ssssssssssssssss", $first_name, $last_name, $email, $contact, $gender, $graduation, $skills, $linkedin, $experience, $employer, $ctc, $notice, $job_role, $vacancy, $address, $uploaded_file);: This line binds the values of the form fields to the placeholders in the prepared statement. It specifies the data types of each value and connects them to the respective placeholders.

 - if ($stmt->execute()) {: This line begins an if statement that checks if the prepared statement executes successfully.

 - $stmt->close();: If the prepared statement executes successfully, this line closes the prepared statement.

 - $stmt->close();: This line closes the prepared statement, even in case of an error.

In summary, the insertDataIntoDatabase function prepares an SQL query with placeholders, binds form field values to those placeholders, and executes the prepared statement to insert data into the database. If the execution is successful, it returns true, and in case of an error, it returns false and displays an error message. This function plays a crucial role in inserting form data into the database securely using prepared statements.

g.Main Program Flow:

```php
$mysqli = connectToDatabase($hostname, $username, $password, $database);
handleRequestMethod();
handleFormSubmission($mysqli);
$mysqli->close();
```
The main program flow starts by establishing a database connection, then checks the request method and handles form submission. Finally, it closes the database connection.

In summary, this section of code performs the following tasks:

 - Establishes a database connection.

 - Checks the request method to ensure the script is accessed through a valid POST call.

 - Handles form submissions, including data validation, file uploads, and database insertion.

 - Closes the database connection once all operations are completed.

This code handles form submissions, database connections, and file uploads securely while providing appropriate error handling. It's an essential part of your web application for processing job applications.

4.Database (database.sql)

 - The database.sql file contains SQL queries to create the required database and table.

 - It ensures that the database 'form' is created if it doesn't already exist.

 - The 'application' table is defined with columns to store job application data.

5.Styling (style.css)

 - The CSS file style.css provides styles and layout for the job application form.

 - It ensures a visually appealing and responsive design.

 - Styles are applied to form controls, buttons, and error messages.

6.Thank-You Page (thank.html)

 - The thank.html page is displayed to users upon successful form submission.

 - It serves as a confirmation page and provides a message to thank users for applying.



 This codebase combines HTML, CSS, JavaScript, and PHP to create a robust job application form that offers real-time validation, secure data handling, and a user-friendly experience.
## Screenshots

 - Career Form Section-

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/1.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/2.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/3.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/4.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/5.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/6.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/7.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/8.png?raw=true)

 - Error Handling-

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/9.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/10.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/11.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/12.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/13.png?raw=true)

 - Responsive-

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/14.png?raw=true)

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/15.png?raw=true)

 - Thank You Page-

![](https://github.com/abhisheksingh-17/Career-Form-Page/blob/main/Result/16.png?raw=true) 
## Future Scope

 - User Authentication: Implement user authentication and authorization to allow registered users to save and edit their job applications. This could also include user profiles.

 - Admin Panel: Create an admin panel for reviewing and managing job applications submitted through the form. Admins can approve or reject applications.

 - Email Notifications: Implement email notifications to notify applicants when their applications are received and to notify admins when new applications are submitted.

 - Database Optimization: Optimize the database schema and queries for better performance, especially if the application is expected to handle a large volume of data.

 - Multiple File Upload: Allow applicants to upload multiple files, such as a resume and cover letter, and implement validation for each file type.

 - Integration with Job Boards: Explore integration with popular job boards or applicant tracking systems to simplify the application process for job seekers.

 - Data Analytics: Implement data analytics and reporting features to provide insights into the job application trends and demographics.

 - Mobile App: Consider developing a mobile application version of the job application form for users who prefer to apply via mobile devices.

 - Localization: Add support for multiple languages to make the application accessible to a wider audience.

 - Continuous Integration/Deployment (CI/CD): Set up CI/CD pipelines for automated testing and deployment of updates.

 - Security Enhancements: Regularly review and update security measures to protect user data and the application from potential vulnerabilities.

 - Feedback Mechanism: Include a feedback mechanism or survey form to collect user feedback and suggestions for improvements.

 - Machine Learning: Implement machine learning algorithms for resume parsing and matching applicants to job openings.

 - Documentation and Help Center: Create comprehensive documentation and a help center to assist users and administrators.

 - Scalability: Design the application with scalability in mind to handle increased traffic and data in the future.



## Contributing

I welcome contributions from the open-source community to improve and enhance this project. If you'd like to contribute, please follow these guidelines:

 - Fork the Repository: Start by forking the project's repository to your own GitHub account.

 - Clone the Repository: Clone the forked repository to your local machine.

```bash
git clone https://github.com/abhisheksingh-17/Landing-Page-Section.git
```
 - Create a New Branch: Create a new branch for your contribution. Please use a descriptive branch name.
 Make Changes: Make your desired changes or additions to the codebase.

```bash
git checkout -b feature/new-feature
```

 - Test Your Changes: Ensure that your changes do not introduce new issues and that the existing functionality still works.

 - Commit Your Changes: Commit your changes with a clear and concise commit message.

```bash
git commit -m "Add new feature: description of the change"
```

 - Push to Your Fork: Push your changes to your forked repository on GitHub.

```bash
git push origin feature/new-feature
```
 - Create a Pull Request: Open a pull request (PR) from your forked repository to the original repository. Provide a detailed description of your changes in the PR.

 - Code Review: The maintainers will review your PR, provide feedback, and, if necessary, request further changes.

 - Merge: Once your PR is approved, it will be merged into the main project.

Thank you for contributing to our project! Your help is greatly appreciated.

 Contributing to an open-source project like your technology stack section can be a rewarding experience. Here's how individuals can contribute:

 - Filing Issues:Users can help by reporting bugs or suggesting new features through issue tracking. Provide clear and detailed information about the problem or feature request.

 - Code Contributions:Developers can contribute code enhancements, bug fixes, or new features by creating pull requests (PRs). Fork the repository, make changes, and submit a PR for review.

 - Documentation Improvements:Enhancing project documentation is valuable. This includes improving README files, adding inline code comments, and creating new guides or tutorials.

 - Testing:Quality assurance is crucial. Volunteers can test the project on different environments, browsers, or devices and report any issues.

 - Translations:Translators can contribute by translating the project's content into different languages, making it accessible to a wider audience.

 - Accessibility Audits:Individuals with expertise in web accessibility can perform audits to ensure the project complies with accessibility standards.

 - User Support:Experienced users can participate in the project's community by answering questions, offering solutions, and assisting other users.

 - Design Contributions:Designers can help improve the project's user interface and user experience by proposing design changes or creating new assets.

 - Reviewing PRs:Reviewing and providing constructive feedback on pull requests is a valuable contribution. It helps maintain code quality and security.

 I look forward to your contributions and collaboration!
## License

The "Career Form Section" project is licensed under the MIT License.

You are free to:

 - Use, modify, and distribute the code for personal or commercial purposes.

 - Include this code in your own projects, whether open source or proprietary.

Under the following conditions:

 You must include the original copyright notice in any copy or substantial portion of the software.
This project is open-source and available for use, modification, and distribution under the terms of the MIT License. You are free to use, copy, modify, merge, publish, distribute, sublicense, or sell the software with attribution. However, please note that this project comes with no warranty, and the authors are not liable for any issues arising from its use.

Before using or contributing to this project, please review the full text of the MIT License to ensure compliance with its terms.
