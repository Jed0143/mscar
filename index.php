<?php
// login.php

session_start();

// Example login credentials (you would check these from a database)
$admin_credentials = ['username' => 'admin', 'password' => 'admin123'];
$teacher_credentials = ['username' => 'teacher', 'password' => 'teacher123'];
$student_credentials = ['username' => 'student', 'password' => 'student123'];

// Capture form data
$role = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];

// Check login based on the role selected
if ($role == 'admin' && $username == $admin_credentials['username'] && $password == $admin_credentials['password']) {
    $_SESSION['role'] = 'admin';
    header('Location: admin_dashboard.php');  // Redirect to the admin dashboard
    exit;
} elseif ($role == 'teacher' && $username == $teacher_credentials['username'] && $password == $teacher_credentials['password']) {
    $_SESSION['role'] = 'teacher';
    header('Location: teacher_dashboard.php');  // Redirect to the teacher dashboard
    exit;
} elseif ($role == 'student' && $username == $student_credentials['username'] && $password == $student_credentials['password']) {
    $_SESSION['role'] = 'student';
    header('Location: student_dashboard.php');  // Redirect to the student dashboard
    exit;
} else {
    // Invalid credentials
    echo "<script>alert('Invalid login credentials'); window.history.back();</script>";
    exit;
}
?>
