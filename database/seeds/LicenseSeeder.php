<?php

use Illuminate\Database\Seeder;
use App\License;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(License::class, 50)->create();
    }
}
