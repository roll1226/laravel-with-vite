<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert(
            $this->createData()
        );
    }

    private function createData(): array
    {
        $data = [];
        for ($i = 1; $i <= 30; $i++) {
            array_push(
                $data,
                [
                    'context' => "タスク" . $i,
                    'status' => rand(1, 4),
                ]
            );
        }
        return $data;
    }
}
