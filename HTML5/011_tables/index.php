<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <title>Таблицы в HTML (LESSON 11)</title>

    <!--
    <style>
        .demo {
            border:1px solid #C0C0C0;
            border-collapse:collapse;
            padding:5px;
        }
        .demo th {
            border:1px solid #C0C0C0;
            padding:5px;
            background:#F0F0F0;
        }
        .demo td {
            border:1px solid #C0C0C0;
            padding:5px;
        }
    </style>
-->

</head>

<body>
<div class="center-block-main content">
    <h2>011 - Создание таблиц в HTML</h2>
    <hr />
    <br />

    <!--
    caption(заголовок),
    table(блок таблицы),
    tbody(тело таблицы),
    thead(блок полей),
    th(table head),
    tr(table row),
    td(table data)
    -->

    <!-- ТABLE 2 -->
    <table class="demo" border="1" cellpadding="7" cellspacing="0">
        <caption><b>Таблица размеров обуви</b></caption>
        <thead>
        <tr>
            <th>Россия</th>
            <th>Великобритания</th>
            <th>Европа</th>
            <th>Длина ступни, см</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>&nbsp;34,5</td>
            <td>&nbsp;3,5</td>
            <td>&nbsp;36</td>
            <td>&nbsp;23</td>
        </tr>
        <tr>
            <td>&nbsp;35,5</td>
            <td>&nbsp;4</td>
            <td>&nbsp;36⅔</td>
            <td>&nbsp;23-23,5</td>
        </tr>
        <tr>
            <td>&nbsp;36</td>
            <td>&nbsp;4,5</td>
            <td>&nbsp;37⅓</td>
            <td>&nbsp;23,5</td>
        </tr>
        <tr>
            <td>&nbsp;36,5</td>
            <td>&nbsp;5</td>
            <td>&nbsp;38</td>
            <td>&nbsp;24</td>
        </tr>
        <tr>
            <td>&nbsp;37</td>
            <td>&nbsp;5,5</td>
            <td>&nbsp;38⅔</td>
            <td>&nbsp;24,5</td>
        </tr>
        <tr>
            <td>&nbsp;38</td>
            <td>&nbsp;6</td>
            <td>&nbsp;39⅓</td>
            <td>&nbsp;25</td>
        </tr>
        <tr>
            <td>&nbsp;38,5</td>
            <td>&nbsp;6,5</td>
            <td>&nbsp;40</td>
            <td>&nbsp;25,5</td>
        </tr>
        <tr>
            <td>&nbsp;39</td>
            <td>&nbsp;7</td>
            <td>&nbsp;40⅔</td>
            <td>&nbsp;25,5-26</td>
        </tr>
        <tr>
            <td>&nbsp;40</td>
            <td>&nbsp;7,5</td>
            <td>&nbsp;41⅓</td>
            <td>&nbsp;26</td>
        </tr>
        <tr>
            <td>&nbsp;40,5</td>
            <td>&nbsp;8</td>
            <td>&nbsp;42</td>
            <td>&nbsp;26,5</td>
        </tr>
        <tr>
            <td>&nbsp;41</td>
            <td>&nbsp;8,5</td>
            <td>&nbsp;42⅔</td>
            <td>&nbsp;27</td>
        </tr>
        <tr>
            <td>&nbsp;42</td>
            <td>&nbsp;9</td>
            <td>&nbsp;43⅓</td>
            <td>&nbsp;27,5</td>
        </tr>
        <tr>
            <td>&nbsp;43</td>
            <td>&nbsp;9,5</td>
            <td>&nbsp;44</td>
            <td>&nbsp;28</td>
        </tr>
        <tr>
            <td>&nbsp;43,5</td>
            <td>&nbsp;10</td>
            <td>&nbsp;44⅔</td>
            <td>&nbsp;28-28,5</td>
        </tr>
        <tr>
            <td>&nbsp;44</td>
            <td>&nbsp;10,5</td>
            <td>&nbsp;45⅓</td>
            <td>&nbsp;28,5-29</td>
        </tr>
        <tr>
            <td>&nbsp;44,5</td>
            <td>&nbsp;11</td>
            <td>&nbsp;46</td>
            <td>&nbsp;29</td>
        </tr>
        <tr>
            <td>&nbsp;45</td>
            <td>&nbsp;11,5</td>
            <td>&nbsp;46⅔</td>
            <td>&nbsp;29,5</td>
        </tr>
        <tr>
            <td>&nbsp;46</td>
            <td>&nbsp;12</td>
            <td>&nbsp;47⅓</td>
            <td>&nbsp;30</td>
        </tr>
        <tr>
            <td>&nbsp;46,5</td>
            <td>&nbsp;12,5</td>
            <td>&nbsp;48</td>
            <td>&nbsp;30,5</td>
        </tr>
        <tr>
            <td>&nbsp;47</td>
            <td>&nbsp;13</td>
            <td>&nbsp;48⅔</td>
            <td>&nbsp;31</td>
        </tr>
        <tr>
            <td>&nbsp;48</td>
            <td>&nbsp;13,5</td>
            <td>&nbsp;49⅓</td>
            <td>&nbsp;31,5</td>
        </tr>
        <tbody>
    </table>

    <br />
    <hr />
    <br />

    <!-- ТABLE 2 -->
    <table border="1" cellpadding="7" cellspacing="0">
        <tr>
            <td colspan="3" bgcolor ="#D3EDF6" align="center">Ячейка 1</td>
        </tr>
        <tr>
            <td valign="middle" align="center">Ячейка 2</td>
            <td valign="middle" width="98%" valign="top">Ячейка 3</td>
            <td valign="middle" width="2%" valign="top">Ячейка 4</td>
        </tr>
    </table>

    <!--------------- PHP --------------->
    <br />
    <hr />
    <br />
    <?php require_once "utils.php"; ?>
    <hr />
    <br />
    <h1>******* END *******</h1>
    <br />
    <br />
    <!------------- END PHP ------------->

</div> <!-- center-block-main content -->
</body>
</html>
