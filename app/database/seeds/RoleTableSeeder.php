<?php  
class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $role = new Role();
        $role->role = 'admin';
        $role->save();

        $role = new Role();
        $role->role = 'author';
        $role->save();
    }

}