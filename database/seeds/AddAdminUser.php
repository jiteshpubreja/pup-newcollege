<?php

use App\Admin;
use App\User;
use Illuminate\Database\Seeder;

class AddAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'salutation' => 'Mr.',
            'fname' => 'Test',
            'lname' => 'Service',
            'mobile' => '9876543210',
            'landline' => '0123456789',
            'email' => 'test.service@server.com',
            'password' => bcrypt('123456'),
            'is_activated' => 1,
        ]);
        Admin::create(['id_user'=>$user['id'],]);
        
    }
}
