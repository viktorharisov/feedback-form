<?php
session_start();
require 'mail.php';

$errors = validation($_POST);

if (empty($errors)) {
    if (sendMail($_POST)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo json_encode($errors);
}

function validation($data) {
    $errors = [];

    if (empty($data['name']) || strlen($data['name']) > 255) {
        $errors['name'] = 'Поле ФИО обязательно и должно быть до 255 символов.';
    }

    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Введите корректный email.';
    }

    if (empty($data['phone']) || !preg_match('/^\+7\(\d{3}\)\d{7}$/', $data['phone'])) {
        $errors['phone'] = 'Введите корректный номер телефона.';
    }

    if (empty($data['questions']) || strlen($data['questions']) > 4096) {
        $errors['questions'] = 'Поле вопрос обязательно и должно быть до 4096 символов.';
    }

    if (empty($data['captcha']) || $data['captcha'] !== $_SESSION['captcha']) {
        $errors['captcha'] = 'Неверный код капчи.';
    }

    return $errors;
}
?>
