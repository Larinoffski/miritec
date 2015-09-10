<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css">
    <script src="<?php echo URL; ?>public/js/jquery-2.1.4.js"></script>
    <script src="<?php echo URL; ?>public/js/custom.js"></script>
</head>
<body>

<?php Session::init(); ?>

<div id="header">
    <br>

    <?php if(Session::get('user_id') == true):?>
        <a href="<?php echo URL; ?>user/logout">Выйти</a>
    <?php else: ?>
        <a href="<?php echo URL; ?>index">Регистрация</a>
    <?php endif; ?>

</div>
<div id="content"></div>