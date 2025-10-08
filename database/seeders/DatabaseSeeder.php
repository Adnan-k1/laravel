<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Guardian; 
use App\Models\Teacher;
use App\Models\Subject;

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

        
        Guardian::factory(30)->create();

        

        Subject::factory(4)
            ->hasTeacher()
            ->create();
    }
}
