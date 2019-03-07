<?php

use App\Products;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name'=> 'T-shirt',
            'description'=> 'Tres Jolie couleur aux choix',
            'price'=> '3000 Fcfa',
            'category'=>'Habits Homme',
            'image'=>'',
        ]);

        Products::create([
            'name'=> 'T-shirt1',
            'description'=> 'Tres Jolie couleur aux choix',
            'price'=> '3000 Fcfa',
            'category'=>'Habits Homme',
            'image'=>'',
        ]);

        Products::create([
            'name'=> 'T-shirt2',
            'description'=> 'Tres Jolie couleur aux choix',
            'price'=> '3000 Fcfa',
            'category'=>'Habits Homme',
            'image'=>'',
        ]);

        Products::create([
            'name'=> 'T-shirt3',
            'description'=> 'Tres Jolie couleur aux choix',
            'price'=> '3000 Fcfa',
            'category'=>'Habits Homme',
            'image'=>'',
        ]);

    }
}
