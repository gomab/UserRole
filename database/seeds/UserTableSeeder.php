<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Default users

        $role_user   = Role::where('name', 'User')->first();
        $role_author = Role::where('name', 'Author')->first();
        $role_admin  = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->firstName = 'Masta';
        $user->lastName  = 'Visitor';
        $user->email     = 'visitor@gomab.me';
        $user->password  = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $author = new User();
        $author->firstName = 'Nevram';
        $author->lastName  = 'Author';
        $author->email     = 'author@gomab.me';
        $author->password  = bcrypt('author');
        $author->save();
        $author->roles()->attach($role_author);

        $admin = new User();
        $admin->firstName = 'Gomab';
        $admin->lastName  = 'Admin';
        $admin->email     = 'admin@gomab.me';
        $admin->password  = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);


    }
}
