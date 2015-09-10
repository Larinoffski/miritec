<?php // echo $this->msg; ?>

<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/form.css">
<script src="<?php echo URL; ?>public/js/jquery-2.1.4.js"></script>
<script src="<?php echo URL; ?>public/js/form.js"></script>


<!-- атрибут required говорит, что заполнение поля обязательно -->
<form action="<?php echo URL; ?>index/save_action" method="POST" id="registration-form">
    Имя*:
    <input class="regform" type="text" name="1st_name" required placeholder="имя" x-autocompletetype="1_name">
    Фамилия:
    <input class="regform" type="text" name="2nd_name" placeholder="фамилия" x-autocompletetype="2_name">
    Отчество:
    <input class="regform" type="text" name="3rd_name" placeholder="отчество" x-autocompletetype="3_name">
    Email*:
    <input class="regform" type="email" name="mail" required placeholder="адрес электронной почты" x-autocompletetype="email">
    Телефон:
    <input class="regform" type="tel" name="phone" placeholder="номер телефона" x-autocompletetype="phone">
    Пароль*:
    <input class="regform" type="password" name="pass" required placeholder="пароль" x-autocompletetype="pass">
    Подтверждение пароля*:
    <input class="regform" type="password" name="conf_pass" required placeholder="подтвердите пароль" x-autocompletetype="c_pass">

    <!--textarea name="messageFF" required rows="5"></textarea-->

    <input type="submit" value="Отправить">
</form>