<!doctype html>
<!-- html + css + javascript + php -->
<html>
<!-- HEAD -->
<head>
<meta charset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,600' rel='stylesheet' type='text/css'>

<title>Какие языки учить. Как создать веб сайт (LESSON 3)</title>
    <!-- STYLE -->
    <style>
    body {
        background: #f7f7f7;
        font-family: "Arial", serif;
    }
    h1 {
        color: red;
        text-align: center;
        font-family: "Roboto Condensed", serif;
        font-size: 42px;
        font-weight: bold;
    }
    h2 {
        color: blue;
        text-align: center;
        font-family: "Roboto Condensed", serif;
        font-size: 36px;
        font-weight: bold;
    }

    input {
        margin-bottom: 16px;
        margin-top: 10px;
        font-family: "Roboto Condensed", serif;
        font-weight: bold;
    }
    </style>

</head>

<!-- BODY -->
<body>
<h1>Заголовок</h1>
<div align="center">
    <h2>003 - Какие языки учить. Как создать веб сайт</h2>
</div>

<!-- Комментарий -->
<p>Первый абзац</p>
<p>Второй абзац<p>
<input type="button" id="hider" value="Нажмите, чтобы спрятать текст" />
<div id="hide">
    Что такое Lorem Ipsum?
    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
    Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов,
    используя Lorem Ipsum для распечатки образцов.
    Lorem Ipsum не только успешно пережил без заметных изменений пять веков,
    но и перешагнул в электронный дизайн.
    Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и,
    в более недавнее время, программы электронной вёрстки типа Aldus PageMaker,
    в шаблонах которых используется Lorem Ipsum.
</div>

<!-- PHP -->
<h2><?php echo date('j F Y H:i:s') ?></h2>

</body>

<!-- JavaScript> -->
<script>
    document.getElementById('hider').onclick = function() {
        document.getElementById('hide').style.display = 'none';
    }
</script>

</html>
