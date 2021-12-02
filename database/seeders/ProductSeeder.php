<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $product = [
            [
                'name'                 => 'GC BIS-SISMA ED ECOBONUS 110%',
                'location'             => 'Gerocarne',
                'description'          => '',
                'short_description'    => '',
                'repayment'            => '',
                'zip_code'             =>  89831,
                'roi'                  =>  7,
                'duration'             =>  8,
                'maximum_target'       =>  80.000,
                'minimum_target'       =>  70.000,
                'start_founding'       => '30/10/2021  15:00',
                'end_founding'         => '03/12/2021  21:00',
                'risk'                 => 'BB',
                'opportunity_code'     => 'IMP004',
                'manager_prepay_invest'=> true ,
                'prepay_invest'        => true ,
                'email_owner'          => 'cherubinimichele@icloud.com',
                'section'              => '',
                'financial_details'    => '',
                'state'                => '',
                'bonus_multiplier'     => '',


            ],
        ];

        Product::insert($product);
    }
}
