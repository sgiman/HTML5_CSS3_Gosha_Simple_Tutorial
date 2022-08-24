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
    <h2>016 - Селектор выбора HTML. Теги select и option</h2>
    <hr />
    <br />

    <!-- SELECT-OPTIONS -->
    <p>
    <select>
        <option>Example 1</option>
        <option>Example 2</option>
        <option selected="selected">Example 3</option>
        <option>.........</option>
    </select>
    </p>
    <br />
    <hr />
    <br />

    <h3>Multiple options</h3>
    <form action="select1.php" method="post">
        <select size=5 multiple="multiple" name="hero[]">
            <option disabled="disabled">Выберите героя</option>
            <option value="Чебурашка">Чебурашка</option>
            <option selected="selected" value="Крокодил Гена">Крокодил Гена</option>
            <option value="Шапокляк">Шапокляк</option>
            <option value="Крыса Лариса">Крыса Лариса</option>
        </select>
        <p><input type="submit" value="Отправить"></p>

        <h3>Single option</h3>
        <select>
            <option value="1">Опция 1</option>
            <option selected="selected" value="2">Опция 2</option>
            <option value="3">Опция 3</option>
            <option value="4">Опция 4</option>
        </select>
        <p><input type="submit" value="Отправить"></p>
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
