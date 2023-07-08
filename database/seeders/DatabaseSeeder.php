<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Menu::create([
            'nama_menu' => 'Menu 1',
            'harga' => 20000,
            'keterangan' => '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam accusamus eligendi non odit saepe? Nisi repellendus recusandae eveniet iste ipsa?',
            "gambar" => 'menu.jpg'

          
        ]);
        \App\Models\Menu::create([
            'nama_menu' => 'Menu 2',
            'harga' => 20000,
            'keterangan' => '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam accusamus eligendi non odit saepe? Nisi repellendus recusandae eveniet iste ipsa?',
            "gambar" => 'menu.jpg'

          
        ]);
    }
}
