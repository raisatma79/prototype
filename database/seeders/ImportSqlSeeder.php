<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImportSqlSeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('rsump.sql');
        if (File::exists($path)) {
            DB::unprepared(File::get($path));
        }
    }
}