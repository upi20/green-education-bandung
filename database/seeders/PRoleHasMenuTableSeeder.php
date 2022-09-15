<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_menu')->delete();
        
        \DB::table('p_role_has_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 2,
                'menu_id' => 390,
                'created_at' => '2022-08-22 21:07:20',
                'updated_at' => '2022-08-22 21:07:20',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'menu_id' => 390,
                'created_at' => '2022-08-22 21:07:20',
                'updated_at' => '2022-08-22 21:07:20',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 4,
                'menu_id' => 390,
                'created_at' => '2022-08-22 21:07:20',
                'updated_at' => '2022-08-22 21:07:20',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 5,
                'menu_id' => 390,
                'created_at' => '2022-08-22 21:07:20',
                'updated_at' => '2022-08-22 21:07:20',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 6,
                'menu_id' => 390,
                'created_at' => '2022-08-22 21:07:20',
                'updated_at' => '2022-08-22 21:07:20',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 2,
                'menu_id' => 373,
                'created_at' => '2022-08-22 21:07:42',
                'updated_at' => '2022-08-22 21:07:42',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 3,
                'menu_id' => 373,
                'created_at' => '2022-08-22 21:07:42',
                'updated_at' => '2022-08-22 21:07:42',
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 4,
                'menu_id' => 373,
                'created_at' => '2022-08-22 21:07:42',
                'updated_at' => '2022-08-22 21:07:42',
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 5,
                'menu_id' => 373,
                'created_at' => '2022-08-22 21:07:42',
                'updated_at' => '2022-08-22 21:07:42',
            ),
            9 => 
            array (
                'id' => 10,
                'role_id' => 6,
                'menu_id' => 373,
                'created_at' => '2022-08-22 21:07:42',
                'updated_at' => '2022-08-22 21:07:42',
            ),
            10 => 
            array (
                'id' => 11,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2022-08-22 21:07:56',
                'updated_at' => '2022-08-22 21:07:56',
            ),
            11 => 
            array (
                'id' => 12,
                'role_id' => 2,
                'menu_id' => 386,
                'created_at' => '2022-08-22 21:07:56',
                'updated_at' => '2022-08-22 21:07:56',
            ),
            12 => 
            array (
                'id' => 13,
                'role_id' => 3,
                'menu_id' => 386,
                'created_at' => '2022-08-22 21:07:56',
                'updated_at' => '2022-08-22 21:07:56',
            ),
            13 => 
            array (
                'id' => 14,
                'role_id' => 4,
                'menu_id' => 386,
                'created_at' => '2022-08-22 21:07:56',
                'updated_at' => '2022-08-22 21:07:56',
            ),
            14 => 
            array (
                'id' => 15,
                'role_id' => 5,
                'menu_id' => 386,
                'created_at' => '2022-08-22 21:07:56',
                'updated_at' => '2022-08-22 21:07:56',
            ),
            15 => 
            array (
                'id' => 16,
                'role_id' => 6,
                'menu_id' => 386,
                'created_at' => '2022-08-22 21:07:56',
                'updated_at' => '2022-08-22 21:07:56',
            ),
            16 => 
            array (
                'id' => 17,
                'role_id' => 1,
                'menu_id' => 410,
                'created_at' => '2022-09-15 21:17:53',
                'updated_at' => '2022-09-15 21:17:53',
            ),
            17 => 
            array (
                'id' => 18,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2022-09-15 21:18:04',
                'updated_at' => '2022-09-15 21:18:04',
            ),
            18 => 
            array (
                'id' => 19,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2022-09-15 21:20:25',
                'updated_at' => '2022-09-15 21:20:25',
            ),
            19 => 
            array (
                'id' => 20,
                'role_id' => 1,
                'menu_id' => 364,
                'created_at' => '2022-09-15 21:21:35',
                'updated_at' => '2022-09-15 21:21:35',
            ),
            20 => 
            array (
                'id' => 21,
                'role_id' => 1,
                'menu_id' => 351,
                'created_at' => '2022-09-15 21:21:50',
                'updated_at' => '2022-09-15 21:21:50',
            ),
            21 => 
            array (
                'id' => 22,
                'role_id' => 1,
                'menu_id' => 352,
                'created_at' => '2022-09-15 21:22:03',
                'updated_at' => '2022-09-15 21:22:03',
            ),
        ));
        
        
    }
}