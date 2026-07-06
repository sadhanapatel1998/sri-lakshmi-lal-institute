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

    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    $_SESSION['old'] = $_POST;

    $hasError = false;

    if (empty($name)) {
        $_SESSION['errors']['name'] = "Name is required";
        $hasError = true;
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = "Valid email required";
        $hasError = true;
    }

    if (empty($phone) || !preg_match("/^[0-9]{10,15}$/", $phone)) {
        $_SESSION['errors']['phone'] = "Valid phone required";
        $hasError = true;
    }

    if (empty($subject)) {
        $_SESSION['errors']['subject'] = "Subject is required";
        $hasError = true;
    }

    if (empty($message)) {
        $_SESSION['errors']['message'] = "Message is required";
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

        $mail->Subject = "New Website Enquiry";

        $mail->Body = "

        <div style='font-family:Arial;padding:20px;'>

            <h2 style='margin-bottom:15px;color:#353025;'>
                New Website Enquiry
            </h2>

            <p><strong>Name:</strong> $name</p>

            <p><strong>Email:</strong> $email</p>

            <p><strong>Phone:</strong> $phone</p>

            <p><strong>Subject:</strong> $subject</p>

            <p>
                <strong>Message:</strong><br>
                $message
            </p>

        </div>

        ";

        $mail->send();

        unset($_SESSION['errors']);
        unset($_SESSION['old']);

        header("Location: thank-you.php");
        exit();

    } catch (Exception $e) {

        header("Location: error.php");
        exit();

    }

}
?>