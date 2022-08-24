<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Тестовая страница" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>select & options (LESSON 16)</title>
</head>

<body>
<div class="center-block-main content">
    <h2>019 - Специальные HTML5 теги</h2>
    <hr />

    <!-- details, summary -->
    <h3>details, summary</h3>
    <details>
        <summary>Информация об авторе</summary>
        <p>Бердер Родригез</p>
    </details>

    <p>Проверка 123 <mark>выделено</mark> 123 проверка</p>

    <hr />

    <!-- ruby, rt -->
    <h3>ruby, rt</h3>
    <h3>
    <ruby>
        你<rt>nǐ</rt> <!-- ты -->
        &nbsp;
        好<rt>hǎo</rt><!-- хороший -->
    </ruby>

    </h3><hr />

    <!-- PROGRESS -->
    <h3>progress</h3>
    <progress max="100" value="25">
        Загружено на <span id="value">25</span>
    </progress>

    <br /><br /><hr />

    <!-- OUTPUT -->
    <h3>output</h3>
    <form oninput="result.value=(cm.value/2.54).toFixed(2)">
        <p>Введите длину в сантиметрах: <input type="number" name="cm" autofocus></p>
        <p>Длина в дюймах: <output name="result">0</output></p>
    </form>

    <br />

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
