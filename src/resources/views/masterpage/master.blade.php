
<html>
    <head>
        <title>@yield('title')</title>
        @include('masterpage.head')
    </head>
   
    <body>
        @include('masterpage.header')
        
        @yield('content')

        @include('masterpage.footer')
        
    </body>
    
</html>