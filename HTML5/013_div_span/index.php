<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Тестовая страница" /> <!-- важно! --->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>DIV & SPAN (LESSON 13)</title>
</head>

<body>
<div class="center-block-main content">
    <h2>013 - Использование тегов div и span</h2>
    <hr />
    <br />

    <div>Проверка DIV-1</div>
    <div>Проверка DIV-2</div>

    <hr />
    <br />

    <span>Проверка SPAN-1</span>
    <span>Проверка SPAN-2</span>

    <div style="
        position:absolute;
        left:465px;
        top:565px;
        font-family:Verdana;
        font-size:10pt;
        border-style:groove;
        border-width:30px;
        border-color:blue;
        padding:4px
        ">
        This text appears in the <span style="font-style:italic; color:red">upper-left hand corner</span>
        of the page. <br />It also gas a big blue groovy border around it.
    </div>

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
