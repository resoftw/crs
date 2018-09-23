<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="base-url" content="{{url('/')}}">
  <title>CRS</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div id="app">
    <v-app id='resoftw'>
      <v-content>
          @yield('content')
      </v-content>
    </v-app>
  </div>
 
  <script src="{{asset('js/app.js')}}"></script>
  @stack('scripts')

</script>

</body>
</html>