<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Config;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 0,
        ]);

        Config::insert([
            [
                'key' => 'slide',
                'value' => '[
                    {
                        "image": "https://file.hstatic.net/200000722513/file/flash_sale_banner_pc_nang_cap_ram_32gb.png",
                        "title": "11",
                        "content": "22"
                    },
                    {
                        "image": "https://file.hstatic.net/200000722513/file/flash_sale_banner_pc_nang_cap_ram_32gb.png",
                        "title": "11",
                        "content": "22"
                    },
                    {
                        "image": "https://file.hstatic.net/200000722513/file/flash_sale_banner_pc_nang_cap_ram_32gb.png",
                        "title": "11",
                        "content": "22"
                    }
                ]'
            ],
            [
                'key' => 'banner',
                'value' => '[
                    {
                        "image": "https://file.hstatic.net/200000722513/file/flash_sale_banner_pc_nang_cap_ram_32gb.png",
                        "title": "11"
                    },
                    {
                        "image": "https://file.hstatic.net/200000722513/file/flash_sale_banner_pc_nang_cap_ram_32gb.png",
                        "title": "11"
                    }
                ]'
            ]
        ]);
    }
}
