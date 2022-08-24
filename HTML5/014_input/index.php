<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Тестовая страница" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Поля ввода (LESSON 14)</title>
</head>

<body>
<div class="center-block-main content">
    <h2>014 - Поля ввода в HTML5</h2>
    <hr />
    <br />

    <!-- FORM INPUT -->
    <form name="name" action="" method="post">
        <!--<input type="text" value="Поиск..." />-->
        <lable for="name">Введите ваше имя: </lable>
        <input type="text" placeholder="Имя..." name="name" id="name" title="Введите своё имя" maxlength="21" />
        <br />
        <lable for="date">День рождения: </lable>
        <input type="date" name="date" id="date" title="Введете дату рождения"/>
        <br />
        <lable for="url">URL: </lable>
        <input type="url" name="url" id="url" title="Введите url cайта"/>
        <br />
        <lable for="tel">Телефон: </lable>
        <input type="tel" name="tel" id="tel" title="Введите номер телефона"/>
        <br />
        <lable for="range">Диапазон: </lable>
        <input type="range" name="range" id="range" title="Введите диапазон"/>
        <br />
        <lable for="male">Mужской: </lable>
        <input type="radio" name="state" id="male" />
        <br />
        <lable for="female">Женский: </lable>
        <input type="radio" name="state" id="female" />
        <br />
        <lable for="password">Пароль: </lable>
        <input type="password" name="password" id="password" title="Введите пароль" />
        <br />
        <lable for=number">Число: </lable>
        <input type="number" name="number" id="number" title="Введите число" />
        <br />
        <lable for=file">Файл: </lable>
        <input type="file" name="file" id="file" title="Выберите файл" />
        <br />
        <lable for=color">Цвет: </lable>
        <input type="color" name="color" id="color" title="Выберите цвет" />
        <br />
        <lable for="checkbox">Со всем согласен (1): </lable>
        <input type="checkbox" name="checkbox" id="checkbox" />
        <br />
        <lable for="checkbox">Со всем согласен (2): </lable>
        <input type="checkbox" name="checkbox" id="checkbox" />
        <br />
        <lable for="checkbox">Со всем согласен (3): </lable>
        <input type="checkbox" name="checkbox" id="checkbox" />
        <br />
        <lable for="checkbox">Со всем согласен (4): </lable>
        <input type="checkbox" name="checkbox" id="checkbox" />

        <br />
        <input type="button" value="Отправить button" /> <!-- без перезагрузки для ajax -->
        &nbsp;&nbsp;
        <input type="submit" value="Отправить submit" /> <!-- с перезагрузкой для php -->
        &nbsp;&nbsp;
        <input type="reset" value="Очистить" /> <!-- очистить всю форму без перезагрузки -->

    </form>

    <!--------------- PHP --------------->
    <br />
    <hr />
    <br />
    <?php require_once 'utils.php'; ?>
    <hr />
    <br />
    <h1>******* END *******</h1>
    <br />
    <br />
    <!------------- END PHP ------------->

</div> <!-- center-block-main content -->
</body>
</html>
