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
                'id' => 11,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2022-08-22 21:07:56',
                'updated_at' => '2022-08-22 21:07:56',
            ),
            1 => 
            array (
                'id' => 17,
                'role_id' => 1,
                'menu_id' => 410,
                'created_at' => '2022-09-15 21:17:53',
                'updated_at' => '2022-09-15 21:17:53',
            ),
            2 => 
            array (
                'id' => 18,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2022-09-15 21:18:04',
                'updated_at' => '2022-09-15 21:18:04',
            ),
            3 => 
            array (
                'id' => 19,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2022-09-15 21:20:25',
                'updated_at' => '2022-09-15 21:20:25',
            ),
            4 => 
            array (
                'id' => 20,
                'role_id' => 1,
                'menu_id' => 364,
                'created_at' => '2022-09-15 21:21:35',
                'updated_at' => '2022-09-15 21:21:35',
            ),
            5 => 
            array (
                'id' => 21,
                'role_id' => 1,
                'menu_id' => 351,
                'created_at' => '2022-09-15 21:21:50',
                'updated_at' => '2022-09-15 21:21:50',
            ),
            6 => 
            array (
                'id' => 22,
                'role_id' => 1,
                'menu_id' => 352,
                'created_at' => '2022-09-15 21:22:03',
                'updated_at' => '2022-09-15 21:22:03',
            ),
            7 => 
            array (
                'id' => 23,
                'role_id' => 1,
                'menu_id' => 405,
                'created_at' => '2023-01-15 14:24:18',
                'updated_at' => '2023-01-15 14:24:18',
            ),
            8 => 
            array (
                'id' => 24,
                'role_id' => 1,
                'menu_id' => 353,
                'created_at' => '2023-01-15 14:25:10',
                'updated_at' => '2023-01-15 14:25:10',
            ),
            9 => 
            array (
                'id' => 25,
                'role_id' => 1,
                'menu_id' => 354,
                'created_at' => '2023-01-15 14:25:19',
                'updated_at' => '2023-01-15 14:25:19',
            ),
        ));
        
        
    }
}