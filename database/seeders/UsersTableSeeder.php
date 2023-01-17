<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Isep Lutpi Nur',
                'email' => 'iseplutpinur7@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DsI7ChQu4aIwEwc0CTlCnO66pBuIukicAIA/oIKwHD4AIGzIHmHZO',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => '2022-08-28 20:49:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pengguna 2',
                'email' => 'pengguna2@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8N8mGJEWLLOdrjlUzM2ARetB9euXqZgGf1snQbm0xlJ3hHIOuldKO',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => '2023-01-15 15:49:39',
                'updated_at' => '2023-01-15 15:49:39',
            ),
        ));
        
        
    }
}