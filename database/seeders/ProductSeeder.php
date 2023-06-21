<?php
namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Chevrolet Tracker',
                'price' => 40000,
                'description' => 'Chevrolet Tracker 2021',
                'image' => 'https://www.megautos.com/wp-content/uploads/2023/04/Chevrolet-Tracker-RS-dinamica.jpg'
            ],
            [
                'name' => 'Kia Niro',
                'price' => 30000,
                'description' => 'Kia Niro 2021',
                'image' => 'https://cloudfront-us-east-1.images.arcpublishing.com/copesa/2XHXRCPEQZETBCQZPKL55JGVDM.jpg'
            ],
            [
                'name' => 'Volkswagen Beetle',
                'price' => 60000,
                'description' => 'Volswagen Beetle 2021',
                'image' => 'https://static.emol.cl/emol50/Fotos/2016/11/08/file_20161108111455.jpg'
            ],
            [
                'name' => 'Audi A3',
                'price' => 55000,
                'description' => 'Audi A3 2021',
                'image' => 'https://motortudo.com/wp-content/uploads/2023/04/Audi-A3-Sedan-2023.webp'
            ]
        ];
        Product::insert($products);
    }
}