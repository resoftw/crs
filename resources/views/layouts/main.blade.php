<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="base-url" content="{{url('/')}}">
@auth
    <meta name="api-token" content="{{ auth()->user()->api_token }}">
@endauth
  
  <title>CRS</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div id="app">
    <v-app>
    <v-navigation-drawer
      v-model="drawer"
      :clipped="$vuetify.breakpoint.lgAndUp"
      fixed
      app
    >
      <main-menu></main-menu>

    </v-navigation-drawer>      
      <tool-bar></tool-bar>

      <v-content>
        <v-container fluid>
          @yield('content')
        </v-container>
      </v-content>
      <v-footer color="red darken-4" app>
        <v-layout
          justify-center
          row
          wrap
        >  
          <span class="white--text">Copyright &copy; 2018 PT Semen Baturaja. All rights reserved.</span>
        </v-layout>
      </v-footer>
    </v-app>
  </div>
 
  <script src="{{asset('js/app.js')}}"></script>
  @stack('scripts')

</script>

</body>
</html>