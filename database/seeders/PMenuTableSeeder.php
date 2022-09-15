<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu')->delete();
        
        \DB::table('p_menu')->insert(array (
            0 => 
            array (
                'id' => 345,
                'parent_id' => NULL,
                'title' => 'Admin Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'admin.dashboard',
                'sequence' => 1,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            1 => 
            array (
                'id' => 346,
                'parent_id' => NULL,
                'title' => 'Manajemen Pengguna',
                'icon' => 'fas fa-users',
                'route' => 'admin.user',
                'sequence' => 16,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            2 => 
            array (
                'id' => 351,
                'parent_id' => NULL,
                'title' => 'Artikel',
                'icon' => 'fas fa-file-alt',
                'route' => NULL,
                'sequence' => 4,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:50',
            ),
            3 => 
            array (
                'id' => 352,
                'parent_id' => 351,
                'title' => 'List Artikel',
                'icon' => NULL,
                'route' => 'admin.artikel.data',
                'sequence' => 5,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:22:03',
            ),
            4 => 
            array (
                'id' => 353,
                'parent_id' => 351,
                'title' => 'Category',
                'icon' => NULL,
                'route' => 'admin.artikel.kategori',
                'sequence' => 6,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            5 => 
            array (
                'id' => 354,
                'parent_id' => 351,
                'title' => 'Tag',
                'icon' => NULL,
                'route' => 'admin.artikel.tag',
                'sequence' => 7,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            6 => 
            array (
                'id' => 360,
                'parent_id' => NULL,
                'title' => 'Galeri',
                'icon' => 'fas fa-images',
                'route' => 'admin.galeri',
                'sequence' => 8,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            7 => 
            array (
                'id' => 361,
                'parent_id' => NULL,
                'title' => 'Menu Management',
                'icon' => 'fas fa-stream',
                'route' => NULL,
                'sequence' => 17,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            8 => 
            array (
                'id' => 363,
                'parent_id' => NULL,
                'title' => 'Sosial Media',
                'icon' => 'fas fa-share-alt',
                'route' => 'admin.social_media',
                'sequence' => 10,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            9 => 
            array (
                'id' => 364,
                'parent_id' => NULL,
                'title' => 'Kontak',
                'icon' => 'fas fa-phone',
                'route' => NULL,
                'sequence' => 11,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:35',
            ),
            10 => 
            array (
                'id' => 367,
                'parent_id' => NULL,
                'title' => 'User Access',
                'icon' => 'fas fa-user-check',
                'route' => NULL,
                'sequence' => 20,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            11 => 
            array (
                'id' => 368,
                'parent_id' => 367,
                'title' => 'Permission',
                'icon' => NULL,
                'route' => 'admin.user_access.permission',
                'sequence' => 21,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            12 => 
            array (
                'id' => 369,
                'parent_id' => 367,
                'title' => 'Role',
                'icon' => NULL,
                'route' => 'admin.user_access.role',
                'sequence' => 22,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            13 => 
            array (
                'id' => 373,
                'parent_id' => NULL,
                'title' => 'Ganti Password',
                'icon' => 'fas fa-key',
                'route' => 'member.password',
                'sequence' => 31,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            14 => 
            array (
                'id' => 386,
                'parent_id' => NULL,
                'title' => 'Logout',
                'icon' => 'fas fa-sign-out-alt',
                'route' => 'logout',
                'sequence' => 32,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:54:09',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            15 => 
            array (
                'id' => 390,
                'parent_id' => NULL,
                'title' => 'Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'member.dashboard',
                'sequence' => 2,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-06 15:16:19',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            16 => 
            array (
                'id' => 392,
                'parent_id' => NULL,
                'title' => 'Google Forms',
                'icon' => 'fas fa-user-edit',
                'route' => 'admin.pendaftaran.gform',
                'sequence' => 9,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-08 16:14:54',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            17 => 
            array (
                'id' => 393,
                'parent_id' => NULL,
                'title' => 'Utility',
                'icon' => 'fas fa-tools',
                'route' => NULL,
                'sequence' => 23,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-08 22:41:26',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            18 => 
            array (
                'id' => 394,
                'parent_id' => 393,
                'title' => 'Frontend Notification',
                'icon' => NULL,
                'route' => 'admin.utility.notif_depan_atas',
                'sequence' => 25,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-08 22:41:53',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            19 => 
            array (
                'id' => 397,
                'parent_id' => NULL,
                'title' => 'Setting',
                'icon' => 'fas fa-wrench',
                'route' => NULL,
                'sequence' => 27,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-14 21:10:57',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            20 => 
            array (
                'id' => 398,
                'parent_id' => 397,
                'title' => 'Admin',
                'icon' => NULL,
                'route' => 'admin.setting.admin',
                'sequence' => 28,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-14 21:11:42',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            21 => 
            array (
                'id' => 399,
                'parent_id' => 397,
                'title' => 'Front',
                'icon' => NULL,
                'route' => 'admin.setting.front',
                'sequence' => 29,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-14 21:52:45',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            22 => 
            array (
                'id' => 400,
                'parent_id' => 397,
                'title' => 'Home',
                'icon' => NULL,
                'route' => 'admin.setting.home',
                'sequence' => 30,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-16 14:55:41',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            23 => 
            array (
                'id' => 401,
                'parent_id' => 393,
                'title' => 'Hari Besar Nasional',
                'icon' => NULL,
                'route' => 'admin.utility.hari_besar_nasional',
                'sequence' => 26,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-17 21:19:05',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            24 => 
            array (
                'id' => 402,
                'parent_id' => 393,
                'title' => 'Admin Notification',
                'icon' => NULL,
                'route' => 'admin.utility.notif_admin_atas',
                'sequence' => 24,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-18 16:42:00',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            25 => 
            array (
                'id' => 404,
                'parent_id' => 403,
                'title' => 'Anggota',
                'icon' => NULL,
                'route' => 'admin.lapooran.anggota',
                'sequence' => 41,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-18 18:55:08',
                'updated_at' => '2022-08-20 14:04:25',
            ),
            26 => 
            array (
                'id' => 405,
                'parent_id' => 361,
                'title' => 'Admin',
                'icon' => NULL,
                'route' => 'admin.menu.admin',
                'sequence' => 18,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-20 14:12:45',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            27 => 
            array (
                'id' => 406,
                'parent_id' => 361,
                'title' => 'Frontend',
                'icon' => NULL,
                'route' => 'admin.menu.frontend',
                'sequence' => 19,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-20 14:16:07',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            28 => 
            array (
                'id' => 407,
                'parent_id' => 364,
                'title' => 'Message',
                'icon' => NULL,
                'route' => 'admin.kontak.message',
                'sequence' => 12,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-21 08:38:20',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            29 => 
            array (
                'id' => 408,
                'parent_id' => 364,
                'title' => 'FAQ',
                'icon' => NULL,
                'route' => 'admin.kontak.faq',
                'sequence' => 13,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-21 08:39:18',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            30 => 
            array (
                'id' => 409,
                'parent_id' => 364,
                'title' => 'List',
                'icon' => NULL,
                'route' => 'admin.kontak.list',
                'sequence' => 14,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-21 08:40:08',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            31 => 
            array (
                'id' => 410,
                'parent_id' => NULL,
                'title' => 'Media Dan Informasi',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 3,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-09-15 21:17:53',
                'updated_at' => '2022-09-15 21:21:08',
            ),
            32 => 
            array (
                'id' => 411,
                'parent_id' => NULL,
                'title' => 'Peralatan',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 15,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-09-15 21:18:04',
                'updated_at' => '2022-09-15 21:21:08',
            ),
        ));
        
        
    }
}