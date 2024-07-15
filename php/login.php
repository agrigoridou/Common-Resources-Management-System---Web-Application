<?php
// Include the database connection file
include 'database_connection.php';

// Function to validate input fields
function validateFields($fields)
{
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            return false;
        }
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requiredFields = ['email', 'password_e', 'role_id'];

    if (validateFields($requiredFields)) {
        // Get values passed
        $email = $_POST['email'];
        $password = $_POST['password_e'];
        $roleId = $_POST['role_id'];

        try {
            // Query the database for the user using parameterized query
            $stmt = $pdo->prepare("SELECT user_c.*, user_role.role_id FROM user_c 
                                   LEFT JOIN user_role ON user_c.user_id = user_role.user_id 
                                   WHERE email = ? AND password_e = ? AND role_id = ?");
            $stmt->execute([$email, $password, $roleId]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                // Store user information in the session
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['role_id'] = $row['role_id'];
                $_SESSION['department'] = $row['department'];

                // Debugging: Check the value of role_id
                var_dump($row['role_id']);

                // Determine the user's role and redirect them to the appropriate page
                if ($row['role_id'] === 2001) {
                    // User is a user manager
                    header("Location: user_manager.php");
                    exit();
                } elseif ($row['role_id'] === 2002) {
                    // User is a reservation manager
                    header("Location: booking_manager.php");
                    exit();
                } elseif ($row['role_id'] === 2003) {
                    // User is a teacher
                    header("Location: teacher.php");
                    exit();
                } else {
                    // User has an unknown role, display an error message and redirect to the index page
                    $errorMessage = "You do not have the required role to access this page.";
                    header("Location: index.php?error=" . urlencode($errorMessage));
                    exit();
                }
            } else {
                // User authentication failed
                $errorMessage = "The password or email is incorrect, please try again.";
                header("Location: index.php?error=" . urlencode($errorMessage));
                exit();
            }
        } catch (PDOException $e) {
            // Handle database errors
            echo "Error: " . $e->getMessage();
        }
    } else {
        // Required fields not filled
        echo "Error: All fields are required.";
    }
}
