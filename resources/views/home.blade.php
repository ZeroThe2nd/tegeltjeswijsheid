<!doctype html>
<html lang='{{ str_replace('_', '-', app()->getLocale()) }}'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible'
          content='ie=edge'>
    <title>{{config('app.name')}}</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400&display=swap"
          type="text/css"
          rel="stylesheet">

    <style type='text/css'>
        :root {
            --main-bg-color : #cccccc;
            --main-color    : #212121;
        }

        @media (prefers-color-scheme : dark) {
            :root {
                --main-bg-color : rgb(34, 34, 42);
                --main-color    : rgb(33, 176, 108);
            }
        }

        * {
            margin  : 0;
            padding : 0
        }

        html,
        body {
            display          : flex;
            width            : 100%;
            height           : 100%;

            flex-direction   : column;
            align-items      : center;
            align-content    : center;

            font-family      : 'Raleway', sans-serif;
            font-size        : 16px;
            font-weight      : 200;

            color            : var(--main-color);
            background-color : var(--main-bg-color);
        }

        .card {
            margin     : auto;
            max-width  : 88ch;
            text-align : center;
        }

        .card .title {
            font-size   : 4.5em;
            line-height : 1.6em;
            font-weight : 200;
        }
    </style>
</head>

<body>
<div class="card">
    <h1 class="title">
        {{ str_replace('_', '-', config('app.name')) }}
    </h1>
</div>
</body>

</html>

