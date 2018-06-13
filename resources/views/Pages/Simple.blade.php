<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    <title>{{ $PageObj->Title }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('Components.GlobalScripts')

        @foreach( $PageObj->HeaderComponents as $Components) 
            @include($Components)
        @endforeach 

    </head>
<body>

    <?php
        if(empty($PageObj->BodyComponents)) {
            echo "<div> ERROR: you for some reason have tried to use the 'Simple.blade.php' template without assigning any body components</div>";
        }
    ?>

    @foreach( $PageObj->BodyComponents as $Components) 
            <div>@include($Components)</div>
    @endforeach


</body>
</html> 
