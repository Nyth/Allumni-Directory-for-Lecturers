<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Role::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name','admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name','user')->first();
        
    $admin = User:: create([
            'name'=> 'Admiinn User',
            'email'=>'admi@admiinnn.com',
            'password'=> Hash::make('admiyadmiin')
        ]);
        
        $author = User:: create([
            'name'=> 'Authorr User',
            'email'=>'author@authrrr.com',
            'password'=> Hash::make('paaasword')
        ]);
        
        $user = User:: create([
            'name'=> 'usee Use',
            'email'=>'use@useer.com',
            'password'=> Hash::make('paesword')
        ]);
        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
