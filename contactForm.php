<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$firstname = $secondname = $email = $message = "";
$firstname_err = $secondname_err = $email_err = $message_err = "";
$error_message = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $firstname = trim($_POST["firstname"]);
    $secondname = trim($_POST["secondname"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (empty($firstname)) {
        $firstname_err = "Please enter a first name.";
        header("location: contact.php?err=$firstname_err");
    }

    if (empty($secondname)) {
        $secondname_err = "Please enter a last name.";
    }

    if (empty($email)) {
        $email_err = "Please enter an email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email.";
    }

    if (empty($message)) {
        $message_err = "Please enter a message.";
    }

    // Check if there are any validation errors
    if (empty($firstname_err) && empty($secondname_err) && empty($email_err) && empty($message_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO olive_client (first_name, second_name, email, message) VALUES (?, ?, ?, ?)";
         
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_firstname, $param_secondname, $param_email, $param_message);

            // Set parameters
            $param_firstname = $firstname;
            $param_secondname = $secondname;
            $param_email = $email;
            $param_message = $message;
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to a success page or display a success message.
                header("location: contact.php");
                exit();
            } else {
                $error_message = "Oops! Something went wrong when saving to the database.";
            }
        } else {
            $error_message = "Oops! Something went wrong while preparing the statement.";
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        $error_message = "Please fix the validation errors before submitting the form.";
    }
} else {
    $error_message = "Form was not submitted.";
}

// Close connection
mysqli_close($link);

if (!empty($error_message)) {
    echo "Oops! Something went wrong. Please try again later.<br>";
    echo "Error details: " . $error_message;
}
?>
