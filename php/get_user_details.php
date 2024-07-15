<?php
include 'database_connection.php';

// Start the session
session_start();

// Fetch user details from the database
$user_id = $_SESSION['user_id'];

// Your database query and retrieval logic here
// Replace this with your actual database query
$sql = "SELECT u.*, r.role_name FROM user_c u
        LEFT JOIN user_role ur ON u.user_id = ur.user_id
        LEFT JOIN role_c r ON ur.role_id = r.role_id
        WHERE u.user_id = :user_id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Output user details as JSON
    echo json_encode($user);
} else {
    // Handle the case when no user details are found
    echo json_encode(array('error' => 'User not found'));
}
