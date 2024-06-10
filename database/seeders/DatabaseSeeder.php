<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;
use App\Models\Loan;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();
        Book::factory(50)->create();
        Loan::factory(100)->create();
    }
}
