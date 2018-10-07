<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $usr=\App\User::create([
        	"name"=>"Administrator",
        	"email"=>"admin@crs.com",
        	"phone"=>"08120182018",
        	"address"=>"Planet Earth",
        	"password"=>password_hash("password",PASSWORD_DEFAULT),
        	"remember_token"=>str_random(10),
        ]);
	    do {
            $api_token = str_random(60);
        } while (User::where('api_token', $api_token)->exists());
        $usr->api_token=$api_token;
        $usr->save();

    }
}
