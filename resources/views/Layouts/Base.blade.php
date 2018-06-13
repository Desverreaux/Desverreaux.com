{{-- <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    <title>{{ $PageObj->Title }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('Components.GlobalScripts')
        
        @foreach( $PageObj->HeaderComponents as $Components) 
            @include($Components)
        @endforeach 

        @yield('Header')

    </head>
<body>
    
    @foreach( $PageObj->BodyComponents as $Components) 
            <div>@include($Components)</div>
    @endforeach

    @yield('Body');

</body>
</html> --}}

{{-- SEE MVC GRAPH TO SEE WHY HAVING A HEIRACHACAL HTML TEMPLATING ENGINE IS BAD
    
    the reason boils down to blade expects a much higher degree of separation of 
    logic and presentation than I am comfortable with and can wrap head around, 
    at least at the moment.
    
--}}