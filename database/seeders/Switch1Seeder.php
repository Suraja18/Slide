<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Switch1;

class Switch1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Admin = [
            'name' => 'Admin',
            'switch' => '1',
        ];
        Switch1::create($Admin);
    }
}
