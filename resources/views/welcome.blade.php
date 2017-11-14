<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>

        <div class="container">
            
            <div>
                <form action="/contato" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="nome" placeholder="Name / POST">
                    <button>Enviar</button>
                </form>

                <form action="/contato" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    <input type="text" name="nome" placeholder="Name / POST">
                    <button>Enviar</button>
                </form>
            </div>

        </div>
    </body>
</html>
