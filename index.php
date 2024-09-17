<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Форма обратной связи</title>
</head>
<body>


<form id="feedbackForm" method="post" action="scripts/validation.php" >
    <input type="hidden" name="action" value="message">
    <div id="errorMess"></div>
<div id="item">
    <label for="subject">Тема вопроса:</label>
    <select id="subject" name="subject" >
        <option value="">Выберите тему</option>
        <option value="1">Тема 1</option>
        <option value="2">Тема 2</option>
    </select>
    <span class="error"></span>
</div>
    <div id="item">
    <label for="name">ФИО:</label>
    <input type="text" id="name" name="name"
           placeholder="Фамилия Имя Отчество" maxlength="255">
    <span class="error"></span>
    </div>
<div id="item">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Введите email" maxlength="255">
    <span class="error"></span>
</div>
<div id="item">
    <label for="phone">Телефон:</label>
    <input type="text" id="phone" name="phone" placeholder="+7(9XX)XXXXXXX" maxlength="255">
    <span class="error"></span>
<div id="item">
    <label for="questions">Ваш вопрос:</label>
    <textarea id="questions" name="questions" placeholder="Введите ваш вопрос..." maxlength="4096"></textarea>
    <span class="error"></span>
</div>
<div id="item" >
    <img class="img-captcha" src="./captcha/captcha.php" data-src="./captcha/captcha.php" width="132" height="46" alt="Капча">
<!--    <img src="http://localhost:80/" alt="Капча"></img>-->
    <label for="captcha">Введите код с картинки:</label>

    <input type="text" id="captcha" name="captcha" >
    <span class="error"></span>
</div>
<div id="item">
    <label>
        <input type="checkbox" name="agree" > Согласие на обработку персональных данных
    </label>
    <span class="error"></span>
</div>
<div id="item">
    <button type="button" id="sendMail">Отправить</button>
</div>
</form>



<script src="scripts/validation.js"></script>
</body>
</html>
