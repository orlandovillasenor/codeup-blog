<?php  
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'orlandovillasenor@me.com';
        $user->password = $_ENV['ADMIN_PASSWORD'];
        $user->username = 'Orlando';
        $user->role_id = '1';
        $user->save();

    }

}