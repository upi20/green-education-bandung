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
                'id' => 17,
                'role_id' => 1,
                'menu_id' => 410,
                'created_at' => '2022-09-15 21:17:53',
                'updated_at' => '2022-09-15 21:17:53',
            ),
            1 => 
            array (
                'id' => 19,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2022-09-15 21:20:25',
                'updated_at' => '2022-09-15 21:20:25',
            ),
            2 => 
            array (
                'id' => 20,
                'role_id' => 1,
                'menu_id' => 364,
                'created_at' => '2022-09-15 21:21:35',
                'updated_at' => '2022-09-15 21:21:35',
            ),
            3 => 
            array (
                'id' => 21,
                'role_id' => 1,
                'menu_id' => 351,
                'created_at' => '2022-09-15 21:21:50',
                'updated_at' => '2022-09-15 21:21:50',
            ),
            4 => 
            array (
                'id' => 24,
                'role_id' => 1,
                'menu_id' => 353,
                'created_at' => '2023-01-15 14:25:10',
                'updated_at' => '2023-01-15 14:25:10',
            ),
            5 => 
            array (
                'id' => 25,
                'role_id' => 1,
                'menu_id' => 354,
                'created_at' => '2023-01-15 14:25:19',
                'updated_at' => '2023-01-15 14:25:19',
            ),
            6 => 
            array (
                'id' => 26,
                'role_id' => 1,
                'menu_id' => 405,
                'created_at' => '2023-01-15 14:52:15',
                'updated_at' => '2023-01-15 14:52:15',
            ),
            7 => 
            array (
                'id' => 27,
                'role_id' => 1,
                'menu_id' => 406,
                'created_at' => '2023-01-15 14:52:44',
                'updated_at' => '2023-01-15 14:52:44',
            ),
            8 => 
            array (
                'id' => 28,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2023-01-15 14:52:49',
                'updated_at' => '2023-01-15 14:52:49',
            ),
            9 => 
            array (
                'id' => 31,
                'role_id' => 1,
                'menu_id' => 409,
                'created_at' => '2023-01-15 15:15:38',
                'updated_at' => '2023-01-15 15:15:38',
            ),
            10 => 
            array (
                'id' => 32,
                'role_id' => 1,
                'menu_id' => 408,
                'created_at' => '2023-01-15 15:16:58',
                'updated_at' => '2023-01-15 15:16:58',
            ),
            11 => 
            array (
                'id' => 33,
                'role_id' => 1,
                'menu_id' => 407,
                'created_at' => '2023-01-15 15:18:51',
                'updated_at' => '2023-01-15 15:18:51',
            ),
            12 => 
            array (
                'id' => 34,
                'role_id' => 1,
                'menu_id' => 352,
                'created_at' => '2023-01-15 15:46:46',
                'updated_at' => '2023-01-15 15:46:46',
            ),
            13 => 
            array (
                'id' => 35,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2023-01-17 21:35:48',
                'updated_at' => '2023-01-17 21:35:48',
            ),
            14 => 
            array (
                'id' => 36,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2023-01-17 21:37:24',
                'updated_at' => '2023-01-17 21:37:24',
            ),
            15 => 
            array (
                'id' => 37,
                'role_id' => 1,
                'menu_id' => 393,
                'created_at' => '2023-01-17 21:37:46',
                'updated_at' => '2023-01-17 21:37:46',
            ),
            16 => 
            array (
                'id' => 42,
                'role_id' => 1,
                'menu_id' => 400,
                'created_at' => '2023-01-17 21:41:03',
                'updated_at' => '2023-01-17 21:41:03',
            ),
            17 => 
            array (
                'id' => 43,
                'role_id' => 1,
                'menu_id' => 402,
                'created_at' => '2023-01-17 21:42:43',
                'updated_at' => '2023-01-17 21:42:43',
            ),
            18 => 
            array (
                'id' => 44,
                'role_id' => 1,
                'menu_id' => 394,
                'created_at' => '2023-01-17 21:42:55',
                'updated_at' => '2023-01-17 21:42:55',
            ),
            19 => 
            array (
                'id' => 45,
                'role_id' => 1,
                'menu_id' => 360,
                'created_at' => '2023-01-17 21:44:54',
                'updated_at' => '2023-01-17 21:44:54',
            ),
            20 => 
            array (
                'id' => 46,
                'role_id' => 1,
                'menu_id' => 363,
                'created_at' => '2023-01-17 21:45:01',
                'updated_at' => '2023-01-17 21:45:01',
            ),
            21 => 
            array (
                'id' => 47,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2023-01-17 21:46:02',
                'updated_at' => '2023-01-17 21:46:02',
            ),
            22 => 
            array (
                'id' => 48,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2023-01-17 21:46:07',
                'updated_at' => '2023-01-17 21:46:07',
            ),
            23 => 
            array (
                'id' => 49,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2023-01-17 21:46:13',
                'updated_at' => '2023-01-17 21:46:13',
            ),
            24 => 
            array (
                'id' => 50,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2023-01-17 21:46:58',
                'updated_at' => '2023-01-17 21:46:58',
            ),
            25 => 
            array (
                'id' => 51,
                'role_id' => 9,
                'menu_id' => 386,
                'created_at' => '2023-01-17 21:46:58',
                'updated_at' => '2023-01-17 21:46:58',
            ),
            26 => 
            array (
                'id' => 52,
                'role_id' => 1,
                'menu_id' => 398,
                'created_at' => '2023-01-17 21:51:29',
                'updated_at' => '2023-01-17 21:51:29',
            ),
            27 => 
            array (
                'id' => 53,
                'role_id' => 1,
                'menu_id' => 399,
                'created_at' => '2023-01-17 21:51:38',
                'updated_at' => '2023-01-17 21:51:38',
            ),
            28 => 
            array (
                'id' => 54,
                'role_id' => 1,
                'menu_id' => 412,
                'created_at' => '2023-01-18 00:11:37',
                'updated_at' => '2023-01-18 00:11:37',
            ),
            29 => 
            array (
                'id' => 55,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2023-01-18 00:16:44',
                'updated_at' => '2023-01-18 00:16:44',
            ),
            30 => 
            array (
                'id' => 57,
                'role_id' => 1,
                'menu_id' => 413,
                'created_at' => '2023-01-18 00:42:10',
                'updated_at' => '2023-01-18 00:42:10',
            ),
        ));
        
        
    }
}