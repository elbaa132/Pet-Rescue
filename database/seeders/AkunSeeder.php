<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Super Admin',
                'email'=>'superadmin@example.com',
                'password'=> bcrypt('adsaasdf'),
            ],
        ]; 
        foreach ($user as $key => $value) {
            User::create($value);
          
        }  
    }
}
