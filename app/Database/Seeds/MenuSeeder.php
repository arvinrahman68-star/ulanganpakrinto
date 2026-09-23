<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Kerak Telor Ayam Original',
                'description' => 'Kerak telor ayam klasik dengan bumbu rempah khas Betawi dan serundeng gurih.',
                'price'       => 20000,
                'image'       => 'kerak_telor_ayam_original.jpg',
            ],
            [
                'name'        => 'Kerak Telor Bebek Original',
                'description' => 'Kerak telor bebek klasik dengan cita rasa lebih kaya dan gurih.',
                'price'       => 25000,
                'image'       => 'kerak_telor_bebek_original.jpg',
            ],
            [
                'name'        => 'Kerak Telor Ayam Spesial',
                'description' => 'Kerak telor ayam dengan tambahan porsi telur dan taburan ebi melimpah.',
                'price'       => 25000,
                'image'       => 'kerak_telor_ayam_spesial.jpg',
            ],
            [
                'name'        => 'Kerak Telor Bebek Spesial',
                'description' => 'Kerak telor bebek dengan ekstra telur, ebi, dan serundeng yang menggugah selera.',
                'price'       => 30000,
                'image'       => 'kerak_telor_bebek_spesial.jpg',
            ],
            [
                'name'        => 'Kerak Telor Ayam Pedas Gila',
                'description' => 'Kerak telor ayam bagi pecinta pedas dengan tambahan irisan cabe rawit.',
                'price'       => 22000,
                'image'       => 'kerak_telor_ayam_pedas.jpg',
            ],
            [
                'name'        => 'Kerak Telor Bebek Pedas Gila',
                'description' => 'Kombinasi gurihnya telur bebek dengan sensasi pedas nendang.',
                'price'       => 27000,
                'image'       => 'kerak_telor_bebek_pedas.jpg',
            ],
            [
                'name'        => 'Kerak Telor Ayam Keju Mozzarella',
                'description' => 'Perpaduan tradisional dan modern, kerak telor ayam dengan lelehan keju mozzarella.',
                'price'       => 30000,
                'image'       => 'kerak_telor_ayam_keju.jpg',
            ],
            [
                'name'        => 'Kerak Telor Bebek Sultan',
                'description' => 'Menu andalan kami! Kerak telor bebek ukuran besar, ekstra topping, dan mozzarella.',
                'price'       => 40000,
                'image'       => 'kerak_telor_bebek_sultan.jpg',
            ],
        ];

        $this->db->table('menus')->insertBatch($data);

        $adminData = [
            'username' => 'admin',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
        ];
        $this->db->table('admins')->insert($adminData);
    }
}
