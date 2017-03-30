<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <style media="screen">
            a{ text-decoration: none;  }
        </style>

        <p class='well'>ESCOLHA O TIPO DE USUÁRIO</p>
        <ul>
            <li><a href="/">Sem permissão</a></li>
            <li><a href="/admin">Admin</a></li>
            <li><a href="/sadmin">Super admin</a></li>
        </ul>


        <br>
        <p class='well'>ESCOLHA A PÁGINA</p>
        <ul>
            <li><a href="/edit">Page EDIT</a></li>
            <li><a href="/delete">Page DELETE</a></li>
        </ul>
        <br>

        <p>DESCRIÇÃO</p>
        <p style="color:green">Default</p>

        @can('edit')
            <p style="color:green">EDIT</p>
        @else
            <p style="color:red">EDIT - Sem Autorização</p>
        @endcan

        @can('delete')
            <p style="color:green">DELETE</p>
        @else
            <p style="color:red">DELETE - Sem autorização</p>
        @endcan

    </body>
</html>
