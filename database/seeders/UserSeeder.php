<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Fazril Arief Nugraha',
                'nim' => '201011401840',
                'password' => bcrypt('fazril123'),
            ]
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
