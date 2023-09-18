// Validation function for the first name field
function validateFirstName(firstName) {
    if (firstName.trim() === "") {
        return "First name is required.<br>";
    }
    return "";
    }

  // Validation function for the last name field
    function validateLastName(lastName) {
    if (lastName.trim() === "") {
        return "Last name is required.<br>";
    }
    return "";
    }


  // Validation function for the email field
    function validateEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        return "Enter a valid email address.<br>";
    }
    return "";
    }
  // Validation function for the contact field
    function validateContact(contact) {
    const phonePattern = /^[0-9]{10}$/; // Assuming a 10-digit phone number
    if (!phonePattern.test(contact)) {
        return "Enter a valid phone number (10 digits).<br>";
    }
    return "";
    }

  // Validation function for the graduation year field
    function validateGraduation(graduation) {
    if (graduation.trim() === "") {
        return "Year of graduation is required.<br>";
    }
    return "";
    }

  // Validation function for the skill set field
    function validateSkill(skill) {
    if (skill.trim() === "") {
        return "Skill set is required.<br>";
    }
    return "";
    }

  // Validation function for the LinkedIn URL field
    function validateLinkedIn(linkedin) {
    const urlPattern = /^(https?:\/\/)?(www\.)?linkedin\.com\/in\/[A-Za-z0-9_-]+\/?$/;
    if (!urlPattern.test(linkedin)) {
        return "Enter a valid LinkedIn URL.<br>";
    }
    return "";
    }

  // Validation function for the employer field
    function validateEmployer(employer) {
    if (employer.trim() === "") {
        return "Current employer is required.<br>";
    }
    return "";
    }

  // Validation function for the upload file field
    function validateUpload(upload) {
    if (upload.trim() === "") {
        return "Please upload your CV.<br>";
    }
    return "";
    }

  // Function to validate the entire form
    function validateForm() {
    const firstName = document.getElementById("first_name").value;
    const lastName = document.getElementById("last_name").value;
    const email = document.getElementById("email").value;
    const contact = document.getElementById("contact").value;
    const graduation = document.getElementById("graduation").value;
    const skill = document.getElementById("skill").value;
    const linkedin = document.getElementById("linkedin").value;
    const employer = document.getElementById("employer").value;
    const upload = document.getElementById("upload").value;
    // Initialize the error message container
    const errorMessages = document.getElementById("errorMessages");
    errorMessages.innerHTML = "";

    // Validate each field and accumulate error messages
    let errorMessage = "";
    errorMessage += validateFirstName(firstName);
    errorMessage += validateLastName(lastName);
    errorMessage += validateEmail(email);
    errorMessage += validateContact(contact);
    errorMessage += validateGraduation(graduation);
    errorMessage += validateSkill(skill);
    errorMessage += validateLinkedIn(linkedin);
    errorMessage += validateEmployer(employer);
    errorMessage += validateUpload(upload);

    // Display error messages
    if (errorMessage !== "") {
        errorMessages.style.color = "red";
        errorMessages.innerHTML = errorMessage;
      return false; // Prevent form submission
    }

    // Form is valid, allow submission
    return true;
    }
