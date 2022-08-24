<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <title>Списки (LESSON 7)</title>
</head>

<body>
<div class="center-block-main content">
    <h2>007 - Как создать списки в HTML</h2>
    <hr />

    <p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
    It has survived not only five centuries, but also the leap into electronic typesetting,
    remaining essentially unchanged. It was popularised in the 1960s with the release
    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
    like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
    <hr />

    <!-- order list -->
    <h3>Нумерованный список (ol, li)</h3>
    <ol>
        <li>Первый пункт</li>
        <li>Второй пункт</li>
        <li>............</li>
    </ol>
    <hr />
    <ol type="I">
        <li>Первый пункт</li>
        <li>Второй пункт</li>
        <li>............</li>
    </ol>
    <hr />
    <ol type="i">
        <li>Первый пункт</li>
        <li>Второй пункт</li>
        <li>............</li>
    </ol>
    <hr />
    <ol type="A">
        <li>Первый пункт</li>
        <li>Второй пункт</li>
        <li>............</li>
    </ol>
    <hr />
    <ol type="a">
        <li>Первый пункт</li>
        <li>Второй пункт</li>
        <li>............</li>
    </ol>
    <hr />
    <ol type="1">
        <li>Первый пункт</li>
        <li>Второй пункт</li>
        <li>............</li>
    </ol>
    <hr />
    <ol start="4" type="1">
        <li>Первый пункт</li>
        <li>Второй пункт</li>
        <li>............</li>
    </ol>
    <hr />
    <ol reversed="reversed">
        <li>Первый пункт</li>
        <li>Второй пункт</li>
        <li>Третий пункт</li>
        <li>............</li>
    </ol>

    <hr />
 
    <!-- unorder list -->
    <h3>Не пронумерованный список (ul, li)</h3>
    <ul>
        <li>Пункт 1 </li>
        <li>Пункт 2 </li>
        <li>........</li>
    </ul>
    <hr />
    <ul type="circle" >
        <li>Пункт 1 </li>
        <li>Пункт 2 </li>
        <li>........</li>
    </ul>
    <hr />
    <ul type="square">
        <li>Пункт 1 </li>
        <li>Пункт 2 </li>
        <li>........</li>
    </ul>

    <hr />
    <br />
    <!-- dir list (no standard) -->
    <dir>
        <li>Пункт 1 </li>
        <li>Пункт 2 </li>
        <li>........</li>
    </dir>

<!-- PHP -->
<hr />
<br />
<?php require_once 'utils.php'; ?>
<hr />
<br />
<h1>******* END *******</h1>
<br />
</div> <!-- center-block-main content -->

</body>
</html>
