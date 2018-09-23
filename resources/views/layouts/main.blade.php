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
    <v-app>
    <v-navigation-drawer
      v-model="drawer"
      :clipped="$vuetify.breakpoint.lgAndUp"
      fixed
      app
    >
      <main-menu></main-menu>

    </v-navigation-drawer>      
    <v-toolbar
      :clipped-left="$vuetify.breakpoint.lgAndUp"
      color="red darken-4"
      dark
      app
      fixed
    >    
        <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        <span class="title ml-3 mr-5">C<span class="font-weight-light">ostumer</span>
        R<span class="font-weight-light">elationship</span>
        S<span class="font-weight-light">ystem</span></span>

        <v-spacer></v-spacer>

        <v-toolbar-items>
          <v-btn flat href="{{route('login')}}">Login</v-btn>
        </v-toolbar-items>        
      </v-toolbar>
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