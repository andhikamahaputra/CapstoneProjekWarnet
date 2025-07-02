<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema; // Import the Schema facade

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('produks')->truncate();
        
        $produkData = [
            // === MAKANAN ===
            [
                'nama' => 'Indomie Goreng Telor',
                'deskripsi' => 'Indomie goreng jumbo dengan telur mata sapi.',
                'harga' => 12000,
                'kategori' => 'makanan',
                'icon' => '🍜',
                'stok' => 50,
            ],
            [
                'nama' => 'Indomie Rebus Telor',
                'deskripsi' => 'Indomie kuah rasa kari ayam dengan telur dan sawi.',
                'harga' => 12000,
                'kategori' => 'makanan',
                'icon' => '🍲',
                'stok' => 50,
            ],
            [
                'nama' => 'Nasi Goreng Spesial',
                'deskripsi' => 'Nasi goreng dengan sosis, bakso, dan telur.',
                'harga' => 18000,
                'kategori' => 'makanan',
                'icon' => '🍚',
                'stok' => 25,
            ],
            [
                'nama' => 'Roti Bakar Coklat Keju',
                'deskripsi' => 'Roti bakar garing dengan topping meses coklat dan keju parut.',
                'harga' => 10000,
                'kategori' => 'makanan',
                'icon' => '🍞',
                'stok' => 30,
            ],

            // === MINUMAN ===
            [
                'nama' => 'Es Teh Manis',
                'deskripsi' => 'Teh manis dingin yang menyegarkan.',
                'harga' => 5000,
                'kategori' => 'minuman',
                'icon' => '🧊',
                'stok' => 100,
            ],
            [
                'nama' => 'Kopi ABC Susu Panas',
                'deskripsi' => 'Kopi sachet ABC Susu diseduh panas.',
                'harga' => 5000,
                'kategori' => 'minuman',
                'icon' => '☕',
                'stok' => 100,
            ],
            [
                'nama' => 'Good Day Freeze',
                'deskripsi' => 'Kopi Good Day Freeze dingin diblender dengan es.',
                'harga' => 8000,
                'kategori' => 'minuman',
                'icon' => '🥤',
                'stok' => 80,
            ],
            [
                'nama' => 'Coca-cola Dingin',
                'deskripsi' => 'Minuman soda Coca-cola dalam botol.',
                'harga' => 7000,
                'kategori' => 'minuman',
                'icon' => '🍾',
                'stok' => 60,
            ],

            // === SNACK ===
            [
                'nama' => 'Chitato Sapi Panggang',
                'deskripsi' => 'Keripik kentang rasa sapi panggang.',
                'harga' => 10000,
                'kategori' => 'snack',
                'icon' => '🥔',
                'stok' => 40,
            ],
            [
                'nama' => 'Taro Net',
                'deskripsi' => 'Snack jaring aneka rasa.',
                'harga' => 3000,
                'kategori' => 'snack',
                'icon' => '🥠',
                'stok' => 70,
            ],
            [
                'nama' => 'Kacang Garuda',
                'deskripsi' => 'Kacang kulit asin gurih.',
                'harga' => 5000,
                'kategori' => 'snack',
                'icon' => '🥜',
                'stok' => 50,
            ],
        ];

        foreach ($produkData as &$produk) {
            $produk['created_at'] = now();
            $produk['updated_at'] = now();
        }

        DB::table('produks')->insert($produkData);

        Schema::enableForeignKeyConstraints();
    }
}
