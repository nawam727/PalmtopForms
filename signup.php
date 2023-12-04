<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_pwd = $_POST["confirm_pass"];

    $signupError = ""; // Initialize an error message variable

    // Validate user inputs
    if (empty($name) || empty($email) || empty($password) || empty($confirm_pwd)) {
        $signupError = "Please provide all required information.";
    } elseif ($password != $confirm_pwd) {
        $signupError = "Passwords do not match.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $signupError = "Invalid email format.";
    }

    // If no validation errors, proceed with registration
    if (empty($signupError)) {
        include "sql_db_connection.php"; // Include the database connection

        // Check if the user with the same email already exists
        $checkEmail = "SELECT * FROM user WHERE email = ?";
        $stmtCheck = $conn->prepare($checkEmail);

        if ($stmtCheck) {
            $stmtCheck->bind_param("s", $email);
            $stmtCheck->execute();
            $resultCheck = $stmtCheck->get_result();

            if ($resultCheck->num_rows == 0) {
                // User does not exist, proceed with registration

                // Hash the password (use a secure hashing mechanism)
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Create a prepared statement for registration
                $sql = "INSERT INTO user(name, email, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("sss", $name, $email, $hashedPassword);

                    if ($stmt->execute()) {
                        // Registration successful, set session variables
                        $_SESSION["user_id"] = $stmt->insert_id;
                        $_SESSION["user_email"] = $email;

                        // Redirect to a protected area or display a success message
                        header("Location: ../../function.php");
                        exit();
                    } else {
                        $signupError = "Registration failed: " . $stmt->error;
                    }
                } else {
                    $signupError = "Database error: " . $conn->error;
                }

                $stmt->close(); // Close the prepared statement for registration
            } else {
                $signupError = "Email already exists. Please choose another email.";
            }

            $stmtCheck->close(); // Close the prepared statement for checking existing email
        } else {
            $signupError = "Database error: " . $conn->error;
        }

        // Store error message in session if any issue occurred
        $_SESSION['signup_error'] = $signupError;
        exit();
    }
}
?>