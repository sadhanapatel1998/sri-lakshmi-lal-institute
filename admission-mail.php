<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

session_start();

$_SESSION['errors'] = [];
$_SESSION['old'] = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name      = htmlspecialchars(trim($_POST['full_name'] ?? ''));
    $father_name    = htmlspecialchars(trim($_POST['father_name'] ?? ''));
    $email          = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone          = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $date           = htmlspecialchars(trim($_POST['date'] ?? ''));
    $gender         = htmlspecialchars(trim($_POST['gender'] ?? ''));
    $city           = htmlspecialchars(trim($_POST['city'] ?? ''));
    $state          = htmlspecialchars(trim($_POST['state'] ?? ''));
    $course_name    = htmlspecialchars(trim($_POST['course_name'] ?? ''));
    $qualification  = htmlspecialchars(trim($_POST['qualification'] ?? ''));
    $board          = htmlspecialchars(trim($_POST['board'] ?? ''));
    $passing_year   = htmlspecialchars(trim($_POST['passing_year'] ?? ''));
    $address        = htmlspecialchars(trim($_POST['address'] ?? ''));

    $_SESSION['old'] = $_POST;

    $hasError = false;

    if (empty($full_name)) {
        $_SESSION['errors']['full_name'] = "Full Name is required";
        $hasError = true;
    }

    if (empty($father_name)) {
        $_SESSION['errors']['father_name'] = "Father Name is required";
        $hasError = true;
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = "Valid Email required";
        $hasError = true;
    }

    if (empty($phone) || !preg_match("/^[0-9]{10,15}$/", $phone)) {
        $_SESSION['errors']['phone'] = "Valid Phone Number required";
        $hasError = true;
    }

    if (empty($date)) {
        $_SESSION['errors']['date'] = "Date of Birth is required";
        $hasError = true;
    }

    if (empty($gender)) {
        $_SESSION['errors']['gender'] = "Gender is required";
        $hasError = true;
    }

    if (empty($city)) {
        $_SESSION['errors']['city'] = "City is required";
        $hasError = true;
    }

    if (empty($state)) {
        $_SESSION['errors']['state'] = "State is required";
        $hasError = true;
    }

    if (empty($course_name)) {
        $_SESSION['errors']['course_name'] = "Course selection is required";
        $hasError = true;
    }

    if (empty($qualification)) {
        $_SESSION['errors']['qualification'] = "Qualification is required";
        $hasError = true;
    }

    if (empty($board)) {
        $_SESSION['errors']['board'] = "Board / University is required";
        $hasError = true;
    }

    if (empty($passing_year)) {
        $_SESSION['errors']['passing_year'] = "Passing Year is required";
        $hasError = true;
    }

    if (empty($address)) {
        $_SESSION['errors']['address'] = "Address is required";
        $hasError = true;
    }

    if ($hasError) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'web.hoverbusinessservices@gmail.com';
        $mail->Password = 'zrtycnkdwjjgbybt';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom(
            'laxmilalinstitue@gmail.com',
            'Sri Lakshmi Lal Institute of Paramedical Sciences & Management'
        );

        $mail->addAddress(
            'laxmilalinstitue@gmail.com',
            'Sri Lakshmi Lal Institute of Paramedical Sciences & Management'
        );

        $mail->isHTML(true);

        $mail->Subject = "New Admission Enquiry";

        $mail->Body = "

        <div style='font-family:Arial,sans-serif;padding:20px;'>

            <h2 style='color:#104988;margin-bottom:20px;'>
                New Admission Enquiry
            </h2>

            <table cellpadding='10' cellspacing='0' border='1' width='100%' style='border-collapse:collapse;'>

                <tr>
                    <td><strong>Full Name</strong></td>
                    <td>{$full_name}</td>
                </tr>

                <tr>
                    <td><strong>Father Name</strong></td>
                    <td>{$father_name}</td>
                </tr>

                <tr>
                    <td><strong>Email</strong></td>
                    <td>{$email}</td>
                </tr>

                <tr>
                    <td><strong>Phone Number</strong></td>
                    <td>{$phone}</td>
                </tr>

                <tr>
                    <td><strong>Date of Birth</strong></td>
                    <td>{$date}</td>
                </tr>

                <tr>
                    <td><strong>Gender</strong></td>
                    <td>{$gender}</td>
                </tr>

                <tr>
                    <td><strong>City</strong></td>
                    <td>{$city}</td>
                </tr>

                <tr>
                    <td><strong>State</strong></td>
                    <td>{$state}</td>
                </tr>

                <tr>
                    <td><strong>Interested Course</strong></td>
                    <td>{$course_name}</td>
                </tr>

                <tr>
                    <td><strong>Highest Qualification</strong></td>
                    <td>{$qualification}</td>
                </tr>

                <tr>
                    <td><strong>Board / University</strong></td>
                    <td>{$board}</td>
                </tr>

                <tr>
                    <td><strong>Passing Year</strong></td>
                    <td>{$passing_year}</td>
                </tr>

                <tr>
                    <td><strong>Address</strong></td>
                    <td>{$address}</td>
                </tr>

            </table>

        </div>

        ";

        $mail->send();

        unset($_SESSION['errors']);
        unset($_SESSION['old']);

        header("Location: admission-thankyou.php");
        exit();

    } catch (Exception $e) {

        header("Location: error.php");
        exit();

    }
}
?>
