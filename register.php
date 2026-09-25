<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form values
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $middle_name = $_POST["middle_name"];
    $birthdate = $_POST["birthdate"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_type = $_POST["user_type"];


    // Employee
    if ($user_type == "Employee") {

        $department = $_POST["department"];

        $sql = "INSERT INTO employees
                (first_name, last_name, middle_name, birthdate, gender, email, phone_number, address, username, password, department)
                VALUES
                ('$first_name', '$last_name', '$middle_name', '$birthdate', '$gender', '$email', '$phone_number', '$address', '$username', '$password', '$department')";

    }


    // Customer
    else if ($user_type == "Customer") {

        $sql = "INSERT INTO customers
                (first_name, last_name, middle_name, birthdate, gender, email, phone_number, address, username, password)
                VALUES
                ('$first_name', '$last_name', '$middle_name', '$birthdate', '$gender', '$email', '$phone_number', '$address', '$username', '$password')";

    }


    // Save to database
    if ($conn->query($sql) === TRUE) {

        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <title>Registration Successful</title>

            <style>

                body {
                    font-family: Arial, Helvetica, sans-serif;
                    background: #f4fbff;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-height: 100vh;
                    margin: 0;
                }

                .message-box {
                    width: 90%;
                    max-width: 500px;
                    background: #ffffff;
                    padding: 35px;
                    border-radius: 15px;
                    text-align: center;
                    box-shadow: 0 10px 30px rgba(0, 80, 130, 0.15);
                    border-top: 6px solid #2e9d57;
                }

                .success-icon {
                    font-size: 50px;
                    color: #2e9d57;
                    margin-bottom: 10px;
                }

                h2 {
                    color: #18733a;
                    margin-bottom: 10px;
                }

                p {
                    color: #555;
                    font-size: 15px;
                    line-height: 1.5;
                }

                .back-button {
                    display: inline-block;
                    margin-top: 20px;
                    padding: 12px 25px;
                    background: #087eb8;
                    color: white;
                    text-decoration: none;
                    border-radius: 8px;
                    font-weight: bold;
                }

                .back-button:hover {
                    background: #075985;
                }

            </style>
        </head>

        <body>

            <div class='message-box'>

                <div class='success-icon'>✓</div>

                <h2>Registration Successful!</h2>

                <p>
                    Your Sun Son Solar account has been successfully created.
                </p>

                <a href='#' class='back-button'>
                          Log In
                </a>

                <a href='register.html' class='back-button'>
                     Register Another Account
                </a>

            </div>

        </body>
        </html>
        ";

    } else {

        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <title>Registration Error</title>

            <style>

                body {
                    font-family: Arial, Helvetica, sans-serif;
                    background: #fff7f7;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-height: 100vh;
                    margin: 0;
                }

                .message-box {
                    width: 90%;
                    max-width: 500px;
                    background: #ffffff;
                    padding: 35px;
                    border-radius: 15px;
                    text-align: center;
                    box-shadow: 0 10px 30px rgba(130, 0, 0, 0.12);
                    border-top: 6px solid #d93025;
                }

                .error-icon {
                    font-size: 50px;
                    color: #d93025;
                    margin-bottom: 10px;
                }

                h2 {
                    color: #b42323;
                    margin-bottom: 10px;
                }

                p {
                    color: #555;
                    font-size: 15px;
                    line-height: 1.5;
                }

                .back-button {
                    display: inline-block;
                    margin-top: 20px;
                    padding: 12px 25px;
                    background: #087eb8;
                    color: white;
                    text-decoration: none;
                    border-radius: 8px;
                    font-weight: bold;
                }

                .back-button:hover {
                    background: #075985;
                }

            </style>
        </head>

        <body>

            <div class='message-box'>

                <div class='error-icon'>✕</div>

                <h2>Registration Failed</h2>

                <p>
                    We could not create your account.
                </p>

                <p>
                    Error: " . $conn->error . "
                </p>

                <a href='register.html' class='back-button'>
                    Go Back
                </a>

            </div>

        </body>
        </html>
        ";

    }

}

?>