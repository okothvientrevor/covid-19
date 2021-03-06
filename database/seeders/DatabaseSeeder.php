<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TreasurySeeder::class);
        $this->call(DonationSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(HospitalSeeder::class);
        $this->call(HealthworkerSeeder::class);
        $this->call(HeadOfficerSeeder::class);
        $this->call(PatientSeeder::class);
    }
}
