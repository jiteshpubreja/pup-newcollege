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
            'fname' => 'Jitesh',
            'lname' => 'Pubreja',
            'mobile' => '9463844622',
            'landline' => '01752365478',
            'email' => 'jitesh.pubreja@yahoo.com',
            'password' => bcrypt('123456'),
            'is_activated' => 1,
        ]);
        Admin::create(['id_user'=>$user['id'],]);
        
    }
}
