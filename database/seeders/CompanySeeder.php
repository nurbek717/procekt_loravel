<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CarFactory orqali 50 ta mashina ma'lumotini yaratish
        \App\Models\Company::factory(10)->create();
    }
}
