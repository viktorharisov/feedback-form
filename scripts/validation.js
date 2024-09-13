$("#sendMail").on("click", function () {
    var email = $("#email").val().trim();
    var name = $("#name").val().trim();
    var phone = $("#phone").val().trim();
    var questions = $("#questions").val().trim();
    var captcha = $("#captcha").val().trim();
    var agree = $("input[name='agree']").is(":checked");

    var errorMessages = [];

    // Проверка каждого поля
    if (name === "") {
        errorMessages.push("Field Name is required.");
        $("#name").addClass("error-border");
    } else {
        $("#name").removeClass("error-border");
    }

    if (email === "") {
        errorMessages.push("Field Email address is required.");
        $("#email").addClass("error-border");
    } else {
        $("#email").removeClass("error-border");
    }

    if (phone === "") {
        errorMessages.push("Field Phone number is required.");
        $("#phone").addClass("error-border");
    } else {
        $("#phone").removeClass("error-border");
    }

    if (questions === "") {
        errorMessages.push("Field My question is required.");
        $("#questions").addClass("error-border");
    } else {
        $("#questions").removeClass("error-border");
    }

    if (captcha === "") {
        errorMessages.push("Field Captcha is required.");
        $("#captcha").addClass("error-border");
    } else {
        $("#captcha").removeClass("error-border");
    }

    if (!agree) {
        errorMessages.push("You must agree to the terms.");
    }

    // Вывод ошибок или скрытие блока ошибок
    if (errorMessages.length > 0) {
        $("#errorMess").html("<ul><li>" + errorMessages.join("</li><li>") + "</li></ul>");
        $("#errorMess").show();
    } else {
        $("#errorMess").hide();
    }

    // Прерывание отправки формы, если есть ошибки
    if (errorMessages.length > 0) {
        return false;
    }

    // Если ошибок нет, отправляем данные через AJAX
    $.ajax({
        // url: 'mail.php',
        url: 'http://localhost:80',
        type: 'POST',
        cache: false,
        data: {
            email: email,
            name: name,
            phone: phone,
            questions: questions,
            captcha: captcha
        },
        dataType: 'html',
        success: function (data) {
            alert(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Ошибка при отправке сообщения: " + textStatus);
        }
    });
});
