document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");

    const userType = document.getElementById("user_type");
    const departmentGroup = document.getElementById("department_group");
    const department = document.getElementById("department");

    const message = document.getElementById("message");


    // Show or hide department
    function toggleDepartment() {

        if (userType.value === "Employee") {

            departmentGroup.style.display = "block";

        } else {

            departmentGroup.style.display = "none";
            department.value = "";

        }
    }


    userType.addEventListener("change", toggleDepartment);

    toggleDepartment();


    // Show error messages
    function showErrors(errors) {

        message.className = "message error";

        message.innerHTML = `
            <strong>⚠ Please correct the following:</strong>
            <ul>
                ${errors.map(error => `<li>${error}</li>`).join("")}
            </ul>
        `;

        message.scrollIntoView({
            behavior: "smooth",
            block: "center"
        });
    }


    // Form validation
    form.addEventListener("submit", function (event) {

        event.preventDefault();


        // Clear previous message
        message.className = "message";
        message.innerHTML = "";


        // Get values
        const firstName = document.getElementById("first_name").value.trim();
        const lastName = document.getElementById("last_name").value.trim();
        const middleName = document.getElementById("middle_name").value.trim();
        const birthdate = document.getElementById("birthdate").value;
        const gender = document.getElementById("gender").value;
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone_number").value.trim();
        const address = document.getElementById("address").value.trim();
        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm_password").value;
        const selectedUserType = userType.value;


        // Store all errors
        const errors = [];


        // Name validation
        const namePattern = /^[A-Za-z\s'-]+$/;


        if (firstName === "") {
            errors.push("First Name is required.");
        } else if (!namePattern.test(firstName)) {
            errors.push("First Name should contain letters only.");
        }


        if (lastName === "") {
            errors.push("Last Name is required.");
        } else if (!namePattern.test(lastName)) {
            errors.push("Last Name should contain letters only.");
        }


        if (middleName !== "" && !namePattern.test(middleName)) {
            errors.push("Middle Name should contain letters only.");
        }


        // Birthdate
        if (birthdate === "") {
            errors.push("Birthdate is required.");
        }


        // Gender
        if (gender === "") {
            errors.push("Gender is required.");
        }


        // Email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


        if (email === "") {
            errors.push("Email is required.");
        } else if (!emailPattern.test(email)) {
            errors.push("Please enter a valid email address.");
        }


        // Phone
        const phonePattern = /^[0-9]{11}$/;


        if (phone === "") {
            errors.push("Phone Number is required.");
        } else if (!phonePattern.test(phone)) {
            errors.push("Phone Number must contain exactly 11 digits.");
        }


        // Address
        if (address === "") {
            errors.push("Address is required.");
        }


        // Username
        if (username === "") {
            errors.push("Username is required.");
        } else if (username.length < 4) {
            errors.push("Username must be at least 4 characters.");
        }


        // Password
        if (password === "") {
            errors.push("Password is required.");
        } else if (password.length < 8) {
            errors.push("Password must be at least 8 characters.");
        }


        // Confirm password
        if (confirmPassword === "") {
            errors.push("Please confirm your password.");
        } else if (password !== confirmPassword) {
            errors.push("Passwords do not match.");
        }


        // User type
        if (selectedUserType === "") {
            errors.push("Account Type is required.");
        }


        // Department
        if (selectedUserType === "Employee") {

            const departmentValue = department.value.trim();

            if (departmentValue === "") {
                errors.push("Department is required for employees.");
            }
        }


        // If errors exist
        if (errors.length > 0) {

            showErrors(errors);

            return;
        }


        // Everything is valid
        message.className = "message success";

        message.innerHTML = `
            <strong>✓ All information is valid!</strong>
            <br>
            Your registration is being submitted...
        `;


        // Submit form
        form.submit();

    });

});