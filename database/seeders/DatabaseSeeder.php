<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Guardian; // ✅ Import Model Guardian

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Classroom::factory(4)
            ->hasStudents(5)
            ->create();

        // ✅ BARU: Membuat 30 data Wali (Guardian)
        Guardian::factory(30)->create();
    }
}
