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
    <h2>017 - Специальные HTML5 теги</h2>
    <hr />
    <br />

    <!-- Шапка сайта (верхняя часть сайта) -->
    <header><h3>Шапка (header)</h3></header>

    <!-- Меню -->
    <h3>Meню (menu)</h3>
    <menu>
        <li>Русская кухня. Уха бурлацкая</li>
        <li>Украинская кухня. Вареники</li>
        <li>Молдавская кухня. Паприкаш</li>
        <li>Кавказская кухня. Суп-харчо</li>
        <li>Прибалтийская кухня. Вертиняй</li>
    </menu>

    <!-- Контент -->
    <article>

        <h3>Статья, новость, пост.... (article)</h3>
        <p>AUDIO</p>
        <audio controls="controls" autoplay="autoplay" loop="loop">
            <source src="https://scsmed.com.ua/video/music-wordpress-theme-sample-01.mp3" />
        </audio>

        <p>VIDEO</p>
        <video controls="controls" width="640">
            <source src="https://scsmed.com.ua/video/videohive.mp4" />
        </video>

    </article>

    <!-- Боковая панель -->
    <aside><h3>Боковая панель (aside)</h3></aside>

    <!-- Footer (низ сайта) -->
    <footer><h3>Низ сайта (footer)</h3></footer>

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
