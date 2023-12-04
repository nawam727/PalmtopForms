<?php
ini_set('session.gc_maxlifetime', 300);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Please fill in both email and password.";
    } else {
        // Establish PDO connection
        require_once "pdo_db_connection.php"; // Update this with your PDO database connection
        
        $sql = "SELECT id, email, password FROM user WHERE email = :email LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            header("Location: ../../function.php");
            exit;
        } else {
            $_SESSION['error'] = "Invalid email or password.";
        }
    }
}

?>
