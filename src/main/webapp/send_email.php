<?php
require __DIR__ . '/../../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$id = htmlspecialchars($_POST['id'] ?? '');
$vid = htmlspecialchars($_POST['vid'] ?? '');
$age = htmlspecialchars($_POST['age'] ?? '');
$health = htmlspecialchars($_POST['health'] ?? '');
$image = $_FILES['image'] ?? null;
$name = htmlspecialchars($_POST['name'] ?? '');
$description = htmlspecialchars($_POST['description'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');

$email = 'Kk2601@yandex.ru';

$to = 'Kk2601@yandex.ru';
$subject = 'Запрос из приюта для животных';
$message = "
    ID: $id
    Вид: $vid
    Возраст: $age
    Здоров: $health
    Имя: $name
    Описание: $description
    Телефон: $phone
    Email: $email
";

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.yandex.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'kk2601@yandex.ru';
    $mail->Password = 'Kjvnbr97#7';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('kk2601@yandex.ru', 'Webmaster');
    $mail->addAddress($to);

    if ($image && $image['error'] == UPLOAD_ERR_OK) {
        $mail->addAttachment($image['tmp_name'], $image['name']);
    }

    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
    echo '<p>Email успешно отправлен!</p>';
    echo '<script>
        setTimeout(function() {
            window.location.href = "index.html";
        }, 5000);
    </script>';
} catch (Exception $e) {
    echo '<p>Ошибка при отправке сообщения: ' . $mail->ErrorInfo . '</p>';
    echo '<script>
        setTimeout(function() {
            window.location.href = "index.html";
        }, 5000);
    </script>';
}
?>


