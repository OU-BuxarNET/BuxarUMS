<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Страница настройки системы</title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .clearfix:after {
            content: "";
            display: block;
            clear: both;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.4;
            color: #333;
            background-color: #fff;
        }

        .header, .content-wrapper, .container, .content, .footer {
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-direction: row;
        }

        .header {
            height: auto;
            background: #6CAEDD;
            color: #fff;
            -webkit-box-flex: 0;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none;
        }

        .footer {
            height: auto;
            background: #364850;
            color: #fff;
            -webkit-box-flex: 0;
            -webkit-flex: none;
            -ms-flex: none;
            flex: none;
            justify-content: flex-end;
        }

        .footer a {
            color: white
        }

        .content-wrapper {
            margin: 0 auto;
            flex-direction: column;
            height: 100%;
            max-width: 1920px;
        }

        .container {
            flex-wrap: nowrap;
            flex: 1 0 auto;
        }

        .content {
            width: 100%;
            flex-direction: column;
            flex: 1 1 auto;
            order: 1;
            order: 0;
            padding: 25px;
        }

        .sidebar {
            background: #ededed;
            flex: 0 0 auto;
            order: 0;
        }

        .sidebar1 {
            width: 250px;
            order: 1;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul li{
            padding: 10px 15px;
            border: 1px solid #cccccc;
            margin-top: -1px;
        }

        ul li:hover{
            background: #e7e7e7;
        }
    </style>
</head>
<body>
<div class="content-wrapper">
    <header class="header">
        <p style="font-size: 30px; margin: 0; padding: 10px 1em;">Настройка системы</p>
    </header>
    <div class="container clearfix">
        <main class="content">
            <p>
                Вывод блока настроек согласно выбранному разделу

                <?php
                $settings = new MySQL;

                echo '<pre>';
                var_dump($settings->getSettings());
                echo '</pre>';
                ?>
            </p>
        </main>
        <aside class="sidebar sidebar1">
            <ul>
                <li>
                    <a href="#!">Настройка запуска</a><br>
                </li>
                <li>
                    <a href="#!">Настройка пользователей</a><br>
                </li>
                <li>
                    <a href="#!">Режимы разработки</a><br>
                </li>
            </ul>
        </aside>
    </div>

    <footer class="footer">
        <p style="margin: 0; padding: 10px 1em;">
            <a href="?main/index">Вернуться на сайт</a>
        </p>
    </footer>
</div>
</body>
</html>