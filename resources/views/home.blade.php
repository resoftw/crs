@extends('layouts.main')
@section('content')
	<v-layout row wrap>
        <v-spacer></v-spacer>
        <v-flex
          v-for="card in cards"
          :key="card"
          xs12
          sm6
          md4
        >
          <v-card>
            <v-img
              :src="`https://picsum.photos/200/300?image=${getImage()}`"
              height="300px"
            >
              <span
                class="headline white--text pl-3 pt-3"
                v-text="card.title"
              ></span>
            </v-img>

            <v-card-actions class="white justify-center">
            	Lorem Ipsum Dolor Sit Amet
            </v-card-actions>
          </v-card>
        </v-flex>
    </v-layout>

@endsection