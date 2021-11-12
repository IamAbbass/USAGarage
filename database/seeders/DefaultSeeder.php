<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\GarageService;
use \App\Models\ShopCategory;
use \App\Models\Product;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GarageService::create([
            'name' => 'Engine Repair, Overhaul and Rebuild',
            'icon' => 'flaticon-vehicle92',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]);

        GarageService::create([
            'name' => 'Over Heating Diagnosis & Repair',
            'icon' => 'flaticon-wrenches8',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]);

        GarageService::create([
            'name' => 'Transmission Repair & Replacement',
            'icon' => 'flaticon-vehicle71',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]);        

        GarageService::create([
            'name' => 'Brake Repair & Replacement',
            'icon' => 'flaticon-gasoline',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]);

        GarageService::create([
            'name' => 'Suspension System Repair',
            'icon' => 'flaticon-vehicle92',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]); 
        
        GarageService::create([
            'name' => 'Shock and Struts Replacement',
            'icon' => 'flaticon-wrenches8',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]);   

        GarageService::create([
            'name' => 'Steering System Repair',
            'icon' => 'flaticon-vehicle71',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]); 

        GarageService::create([
            'name' => 'Tire Repair and Replacement',
            'icon' => 'flaticon-transport100',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]); 

        GarageService::create([
            'name' => 'Computer Diagnostic Testing',
            'icon' => 'flaticon-gasoline',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]); 

        GarageService::create([
            'name' => 'Air Conditioning A/C Repair',
            'icon' => 'flaticon-vehicle71',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]);         

        GarageService::create([
            'name' => 'Battery Replacement',
            'icon' => 'flaticon-vehicle71',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]);
        
        GarageService::create([
            'name' => 'Alternator & Charging System Repair',
            'icon' => 'flaticon-power19',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]);

        GarageService::create([
            'name' => 'Manufacturer Recommended Service',
            'icon' => 'flaticon-transport100',
            'content' => 'Determination of ignition timing at differing speed and load conditions.'
        ]);


        ShopCategory::create(['name'=>'AC Compressor']);
        ShopCategory::create(['name'=>'Condenser']);
        ShopCategory::create(['name'=>'Climate Control']);        
        ShopCategory::create(['name'=>'Air Filters']);
        ShopCategory::create(['name'=>'Intake System Parts']);        
        ShopCategory::create(['name'=>'Alternator']);
        ShopCategory::create(['name'=>'Starter']);
        ShopCategory::create(['name'=>'Tune Up']);
        ShopCategory::create(['name'=>'Engine Electrical']);        
        ShopCategory::create(['name'=>'Brake Pads']);
        ShopCategory::create(['name'=>'Rotors']);
        ShopCategory::create(['name'=>'Calipers']);
        ShopCategory::create(['name'=>'Brake Parts']);        
        ShopCategory::create(['name'=>'Carburetor Parts']);
        ShopCategory::create(['name'=>'Components']);
        ShopCategory::create(['name'=>'Clutch']);
        ShopCategory::create(['name'=>'Flywheel']);
        ShopCategory::create(['name'=>'Flex Plate']);
        ShopCategory::create(['name'=>'Clutch Parts']);        
        ShopCategory::create(['name'=>'Diesel Fuel Injectors']);
        ShopCategory::create(['name'=>'Injection Parts']);
        ShopCategory::create(['name'=>'Drive Belts']);
        ShopCategory::create(['name'=>'Serpentine Belts']);
        ShopCategory::create(['name'=>'Components']); 
        ShopCategory::create(['name'=>'Fuel Pump']);
        ShopCategory::create(['name'=>'Filters']);
        ShopCategory::create(['name'=>'Tanks']);
        ShopCategory::create(['name'=>'Caps']);
        ShopCategory::create(['name'=>'Fuel Delivery']);        
        ShopCategory::create(['name'=>'Headlights']);        
        ShopCategory::create(['name'=>'Tail Lights']);
        ShopCategory::create(['name'=>'Body Electrical Parts']);
        ShopCategory::create(['name'=>'Injectors']);        
        ShopCategory::create(['name'=>'Oxygen Sensors']);
        ShopCategory::create(['name'=>'Throttle Body']);
        ShopCategory::create(['name'=>'Fuel Injection']);
        ShopCategory::create(['name'=>'Mirrors']);        
        ShopCategory::create(['name'=>'Grilles']);
        ShopCategory::create(['name'=>'Body Mechanical ']);
        ShopCategory::create(['name'=>'Trim']);
        ShopCategory::create(['name'=>'Mufflers']);        
        ShopCategory::create(['name'=>'Exhaust Manifold']);
        ShopCategory::create(['name'=>'Exhaust System']);
        ShopCategory::create(['name'=>'Radiator']);
        ShopCategory::create(['name'=>'Fan']);
        ShopCategory::create(['name'=>'Thermostat']);
        ShopCategory::create(['name'=>'Water Pump']);
        ShopCategory::create(['name'=>'Cooling System']);
        ShopCategory::create(['name'=>'Shocks']);        
        ShopCategory::create(['name'=>'Struts']);
        ShopCategory::create(['name'=>'Control Arm']);
        ShopCategory::create(['name'=>'Ball Joint']); 
        ShopCategory::create(['name'=>'Suspension']);
        ShopCategory::create(['name'=>'Steering Rack']);        
        ShopCategory::create(['name'=>'Pumps']); 
        ShopCategory::create(['name'=>'Steering Parts']);
        ShopCategory::create(['name'=>'Timing Belts']);        
        ShopCategory::create(['name'=>'Chains']);
        ShopCategory::create(['name'=>'Head Gaskets']);   
        ShopCategory::create(['name'=>'Engine Mechanical']);
        ShopCategory::create(['name'=>'Transmission Filter']);        
        ShopCategory::create(['name'=>'Mounts']);   
        ShopCategory::create(['name'=>'Transmission Parts']);
        ShopCategory::create(['name'=>'Wheel Bearings']);        
        ShopCategory::create(['name'=>'Wheels']);   
        ShopCategory::create(['name'=>'Driveshaft']);   
        ShopCategory::create(['name'=>'The CoollaboratoryLiquid Coolant Pro is the innovation of coolant for the use in water coolings of High-End PC systems']);


        Product::create([
            'category_id'=>'1',
            'title'=>'Brake Master Cylinder',
            'image'=>'https://www.discountautoparts.com/product_images/products/D0114-R248342_1.jpg',
            'brand'=>'Replacement',
            'note'=>'The CoollaboratoryLiquid Coolant Pro is the innovation of coolant for the use in water coolings of High-End PC systems',
            'years'=>'2019',
            'price'=>'100'
        ]);   

        Product::create([
            'category_id'=>'2',
            'title'=>'Brake Master Cylinder',
            'image'=>'https://www.discountautoparts.com/product_images/products/D0114-R248342_1.jpg',
            'brand'=>'Condenser',
            'note'=>'The CoollaboratoryLiquid Coolant Pro is the innovation of coolant for the use in water coolings of High-End PC systems',
            'years'=>'2020',
            'price'=>'600'
        ]);  

        Product::create([
            'category_id'=>'3',
            'title'=>'Air Cooler Master',
            'image'=>'https://www.discountautoparts.com/product_images/products/D0114-R248342_1.jpg',
            'brand'=>'Climate Control',
            'note'=>'The CoollaboratoryLiquid Coolant Pro is the innovation of coolant for the use in water coolings of High-End PC systems',
            'years'=>'2018',
            'price'=>'160'
        ]);  

        Product::create([
            'category_id'=>'4',
            'title'=>'Coolant Liquid Pro',
            'image'=>'https://www.discountautoparts.com/product_images/products/D0114-R248342_1.jpg',
            'brand'=>'Replacement',
            'note'=>'The CoollaboratoryLiquid Coolant Pro is the innovation of coolant for the use in water coolings of High-End PC systems',
            'years'=>'2016',
            'price'=>'150'
        ]);   
        
    }
}
