<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>W3.CSS Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @include('Components/CheckDBConnect')

    </head>
<body>

<div id="main" class="p-0 my-0">
    <?php phpinfo(); ?>
</div>
</body>
</html>
