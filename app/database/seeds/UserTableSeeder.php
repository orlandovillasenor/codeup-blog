<?php  
class UserTableSeeder extends Seeder {

    public function run()
    {
        // DB::table('users')->delete();

        // $user = new User();
        // $user->email = 'admin@codeup.com';
        // $user->password = 'adminPass123!';
        // $user->username = 'admin';
        // $user->role_id = '1';
        // $user->save();

        $user = new User();
        $user->email = 'user@codeup.com';
        $user->password = 'userPass123!';
        $user->username = 'user';
        $user->role_id = '2';
        $user->save();
    }

}