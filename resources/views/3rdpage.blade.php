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
       <form method="POST" action="/information">
            <h2>Route::match dung de định nghĩa một tuyến đường (route) có thể xử lý nhiều phương thức HTTP khác nhau.</h2>
           
            <input type='hidden' name = '_method' value = 'patch'/> 
            <input type='hidden' name = '_method' value = 'get'/> 
            <input type='hidden' name = '_method' value = 'put'/> 
            <input type = 'hiden' name = '_token' value = '<?php echo csrf_token() ?>'/>
            <button type = 'submit'>Submit</button>
        </form>
       </div>
    </body>
</html>
