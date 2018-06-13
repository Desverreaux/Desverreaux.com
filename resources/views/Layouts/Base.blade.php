<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    <title>{{ $PageObj->Title }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @foreach( $PageObj->HeaderComponents as $Components) 
            @include($Components)
        @endforeach 
    </head>
<body>
    {{-- @foreach( $PageObj->BodyComponents as $Components) 
            <div>@include($Components)</div>
    @endforeach --}}

    <div>@include('Components.phpinfo')</div>
</body>
</html>
