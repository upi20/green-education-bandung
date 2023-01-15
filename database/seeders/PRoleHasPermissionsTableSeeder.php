<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_permissions')->delete();
        
        \DB::table('p_role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 9,
            ),
            2 => 
            array (
                'permission_id' => 2,
                'role_id' => 9,
            ),
            3 => 
            array (
                'permission_id' => 7,
                'role_id' => 9,
            ),
            4 => 
            array (
                'permission_id' => 12,
                'role_id' => 9,
            ),
            5 => 
            array (
                'permission_id' => 17,
                'role_id' => 9,
            ),
            6 => 
            array (
                'permission_id' => 22,
                'role_id' => 9,
            ),
            7 => 
            array (
                'permission_id' => 27,
                'role_id' => 9,
            ),
            8 => 
            array (
                'permission_id' => 33,
                'role_id' => 9,
            ),
            9 => 
            array (
                'permission_id' => 38,
                'role_id' => 9,
            ),
            10 => 
            array (
                'permission_id' => 43,
                'role_id' => 9,
            ),
            11 => 
            array (
                'permission_id' => 48,
                'role_id' => 9,
            ),
            12 => 
            array (
                'permission_id' => 55,
                'role_id' => 9,
            ),
            13 => 
            array (
                'permission_id' => 59,
                'role_id' => 9,
            ),
            14 => 
            array (
                'permission_id' => 61,
                'role_id' => 9,
            ),
            15 => 
            array (
                'permission_id' => 66,
                'role_id' => 9,
            ),
            16 => 
            array (
                'permission_id' => 70,
                'role_id' => 9,
            ),
            17 => 
            array (
                'permission_id' => 74,
                'role_id' => 9,
            ),
            18 => 
            array (
                'permission_id' => 78,
                'role_id' => 9,
            ),
            19 => 
            array (
                'permission_id' => 82,
                'role_id' => 9,
            ),
            20 => 
            array (
                'permission_id' => 86,
                'role_id' => 9,
            ),
            21 => 
            array (
                'permission_id' => 89,
                'role_id' => 9,
            ),
            22 => 
            array (
                'permission_id' => 94,
                'role_id' => 9,
            ),
            23 => 
            array (
                'permission_id' => 97,
                'role_id' => 9,
            ),
            24 => 
            array (
                'permission_id' => 102,
                'role_id' => 9,
            ),
            25 => 
            array (
                'permission_id' => 109,
                'role_id' => 9,
            ),
            26 => 
            array (
                'permission_id' => 110,
                'role_id' => 9,
            ),
            27 => 
            array (
                'permission_id' => 135,
                'role_id' => 9,
            ),
            28 => 
            array (
                'permission_id' => 136,
                'role_id' => 9,
            ),
            29 => 
            array (
                'permission_id' => 137,
                'role_id' => 9,
            ),
            30 => 
            array (
                'permission_id' => 155,
                'role_id' => 9,
            ),
        ));
        
        
    }
}