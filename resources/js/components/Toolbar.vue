<template>
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
          <v-btn flat href="/login">Login</v-btn>
        </v-toolbar-items>        

<v-spacer></v-spacer>
      <v-btn icon>
        <v-icon>apps</v-icon>
      </v-btn>
      <v-btn icon>
        <v-icon>notifications</v-icon>
      </v-btn>
      <v-btn icon large>
        <v-avatar size="32px" tile>
          <img
            src="../../images/logo 32.png"
            alt="Baturaja"
          >
        </v-avatar>
      </v-btn>

      </v-toolbar>
    
</template>
<script>
export default {
    
}
</script>

