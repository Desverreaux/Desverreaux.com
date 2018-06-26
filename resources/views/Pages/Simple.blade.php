<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    <title>{{ $Data['Title'] }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('Components.GlobalScripts')

    </head>
<body>

    <?php
        if(empty($Data['BodyComponents'])) {
            echo "<div> ERROR: you for some reason have tried to use the 'Simple.blade.php' template without assigning any body components</div>";
        }
    ?>

    @foreach( $Data['BodyComponents'] as $Components) 
            <div>@include($Components)</div>
    @endforeach


</body>
</html> 
