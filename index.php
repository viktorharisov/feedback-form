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


<form id="feedbackForm" method="post" >
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
<!--    <img class="img-captcha" src="./captcha/captcha.php" data-src="./captcha/captcha.php" width="132" height="46" alt="Капча">-->
    <img src="http://localhost:80/" alt="Капча"></img>
    <label for="captcha">Введите код с картинки:</label>
    <div class="form-captcha__refresh">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16">
            <path fill="currentColor"
                  d="M440.65 12.57l4 82.77A247.16 247.16 0 0 0 255.83 8C134.73 8 33.91 94.92 12.29 209.82A12 12 0 0 0 24.09 224h49.05a12 12 0 0 0 11.67-9.26 175.91 175.91 0 0 1 317-56.94l-101.46-4.86a12 12 0 0 0-12.57 12v47.41a12 12 0 0 0 12 12H500a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12h-47.37a12 12 0 0 0-11.98 12.57zM255.83 432a175.61 175.61 0 0 1-146-77.8l101.8 4.87a12 12 0 0 0 12.57-12v-47.4a12 12 0 0 0-12-12H12a12 12 0 0 0-12 12V500a12 12 0 0 0 12 12h47.35a12 12 0 0 0 12-12.6l-4.15-82.57A247.17 247.17 0 0 0 255.83 504c121.11 0 221.93-86.92 243.55-201.82a12 12 0 0 0-11.8-14.18h-49.05a12 12 0 0 0-11.67 9.26A175.86 175.86 0 0 1 255.83 432z">
            </path>
        </svg>
    </div>
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
