<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\TransportType as Type;

class TransportType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transportTypes = [
            [
                'name' => 'Bus',
                'description' => 'Layanan bus kota dan Trans Metro',
            ],
            [
                'name' => 'Kereta Api',
                'description' => 'Layanan Kereta Commuter Line',
            ],
            [
                'name' => 'Angkot',
                'description' => 'Layanan Angkot Tradisional',
            ],
        ];

        foreach ($transportTypes as $transportType) {
            Type::create($transportType);
        }
    }
}
