<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
       <div>
       <form method="MATCH" action="/3rdpage">
            <h2>Roure::POST</h2>
            <tr>
                <td> Luu y phai co token trong tat ca cac phuong thuc ngoai tru GET,OPTIONS</td></br>
                <td> Su dung form cho phuong thuc POST</td></br>
            </tr>

            <input type='text' name = '_token' value = '<?php echo csrf_token()?> ' > </input></br>
            <button type = 'submit'>Submit</button>
        </form>
       </div>
    </body>
</html>
