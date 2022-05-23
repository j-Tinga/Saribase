<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item')->delete();
        
        \DB::table('item')->insert(array (
            0 => 
            array (
                'itemID' => 3,
                'brandID' => 2,
                'itemName' => 'Epoxseal Epoxy Enamel Black',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 6,
            ),
            1 => 
            array (
                'itemID' => 4,
                'brandID' => 2,
                'itemName' => 'Epoxseal E/E Orange',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 6,
            ),
            2 => 
            array (
                'itemID' => 5,
                'brandID' => 18,
                'itemName' => 'Boysen Oil Burnt Amber',
                'price' => 1700.0,
                'sellingPrice' => 50.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 3,
            ),
            3 => 
            array (
                'itemID' => 7,
                'brandID' => 4,
                'itemName' => 'Davies Semi Gloss Latex',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            4 => 
            array (
                'itemID' => 8,
                'brandID' => 4,
                'itemName' => 'Davies Emulsion',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            5 => 
            array (
                'itemID' => 9,
                'brandID' => 5,
                'itemName' => 'Pinnacle E/E Orange',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '8 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 2,
            ),
            6 => 
            array (
                'itemID' => 10,
                'brandID' => 5,
                'itemName' => 'Pinnacle E/E Yellow',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 2,
            ),
            7 => 
            array (
                'itemID' => 11,
                'brandID' => 6,
                'itemName' => 'EZCoat M/P Red Oxide',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            8 => 
            array (
                'itemID' => 12,
                'brandID' => 6,
                'itemName' => 'EZCoat Gloss Latex White',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            9 => 
            array (
                'itemID' => 13,
                'brandID' => 7,
                'itemName' => 'Hudson AC Thinner',
                'price' => 2200.0,
                'sellingPrice' => 2400.0,
                'unitCount' => '6 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            10 => 
            array (
                'itemID' => 14,
                'brandID' => 7,
                'itemName' => 'Hudson Acrylic Ruby Red',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            11 => 
            array (
                'itemID' => 15,
                'brandID' => 8,
                'itemName' => 'Rain or Shine Blue Denim',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 3,
            ),
            12 => 
            array (
                'itemID' => 16,
                'brandID' => 8,
                'itemName' => 'Rain or Shine Antique White',
                'price' => 1700.0,
                'sellingPrice' => 2000.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 3,
            ),
            13 => 
            array (
                'itemID' => 17,
                'brandID' => 9,
                'itemName' => 'Mc Gills AC Lemon Yellow',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            14 => 
            array (
                'itemID' => 18,
                'brandID' => 9,
                'itemName' => 'Mc Gills AC Thalo Blue',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            15 => 
            array (
                'itemID' => 19,
                'brandID' => 10,
                'itemName' => 'USA AC Flat Black',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 3,
            ),
            16 => 
            array (
                'itemID' => 20,
                'brandID' => 10,
                'itemName' => 'USA AC Astral Red',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 3,
            ),
            17 => 
            array (
                'itemID' => 21,
                'brandID' => 11,
                'itemName' => 'Weber Spray Filler Green',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 7,
            ),
            18 => 
            array (
                'itemID' => 22,
                'brandID' => 11,
                'itemName' => 'Weber Zinc Chromate Yellow',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 7,
            ),
            19 => 
            array (
                'itemID' => 23,
                'brandID' => 12,
                'itemName' => 'Miracle Urethane Thinner',
                'price' => 2700.0,
                'sellingPrice' => 2900.0,
                'unitCount' => '6 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 8,
            ),
            20 => 
            array (
                'itemID' => 24,
                'brandID' => 12,
                'itemName' => 'Miracle Paint Thinner',
                'price' => 1700.0,
                'sellingPrice' => 1800.0,
                'unitCount' => '6 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 8,
            ),
            21 => 
            array (
                'itemID' => 25,
                'brandID' => 13,
                'itemName' => 'Polygloss Ultra Clearcoat',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 3,
            ),
            22 => 
            array (
                'itemID' => 26,
                'brandID' => 13,
                'itemName' => 'Polygloss Urethane Spray Filler',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 3,
            ),
            23 => 
            array (
                'itemID' => 27,
                'brandID' => 14,
                'itemName' => 'Weber Urethane Thinner',
                'price' => 2700.0,
                'sellingPrice' => 2900.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 7,
            ),
            24 => 
            array (
                'itemID' => 28,
                'brandID' => 14,
                'itemName' => 'Weber Urethane International Red',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 7,
            ),
            25 => 
            array (
                'itemID' => 29,
                'brandID' => 15,
                'itemName' => 'Anzahl Urethane Candyton',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            26 => 
            array (
                'itemID' => 30,
                'brandID' => 15,
                'itemName' => 'Anzahl Urethane Moly Orange',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 5,
            ),
            27 => 
            array (
                'itemID' => 31,
                'brandID' => 16,
                'itemName' => 'Nippon Acrylic Multi Purpose',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 4,
            ),
            28 => 
            array (
                'itemID' => 32,
                'brandID' => 25,
                'itemName' => 'Nippon High Grade Urethane',
                'price' => 2450.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '6 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 2,
            ),
            29 => 
            array (
                'itemID' => 35,
                'brandID' => 18,
                'itemName' => 'NAX TTC Maroon',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '12 liters',
                'dateAdded' => '2022-05-23',
                'supplierID' => 4,
            ),
            30 => 
            array (
                'itemID' => 36,
                'brandID' => 18,
                'itemName' => 'NAX Premila M/T White Metal',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '12 liters',
                'dateAdded' => '2022-05-23',
                'supplierID' => 4,
            ),
            31 => 
            array (
                'itemID' => 37,
                'brandID' => 19,
                'itemName' => 'Domino Lacquer Putty Gray',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 2,
            ),
            32 => 
            array (
                'itemID' => 38,
                'brandID' => 19,
                'itemName' => 'Domino Lacquer Thalo Green',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 2,
            ),
            33 => 
            array (
                'itemID' => 39,
                'brandID' => 20,
                'itemName' => 'Durax Lacquer Putty Gray',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 7,
            ),
            34 => 
            array (
                'itemID' => 40,
                'brandID' => 20,
                'itemName' => 'Durax Lacquer Metallic Fine',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 7,
            ),
            35 => 
            array (
                'itemID' => 41,
                'brandID' => 21,
                'itemName' => 'Aikka Super Fine Aluminum',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 9,
            ),
            36 => 
            array (
                'itemID' => 42,
                'brandID' => 21,
                'itemName' => 'Aikka Jet Black',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 9,
            ),
            37 => 
            array (
                'itemID' => 43,
                'brandID' => 22,
                'itemName' => 'Time out Acrylic Flat Black',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 2,
            ),
            38 => 
            array (
                'itemID' => 44,
                'brandID' => 22,
                'itemName' => 'Time out Acrylic Primer Gray',
                'price' => 2400.0,
                'sellingPrice' => 2600.0,
                'unitCount' => '4 gallons',
                'dateAdded' => '2022-05-23',
                'supplierID' => 2,
            ),
            39 => 
            array (
                'itemID' => 47,
                'brandID' => 24,
                'itemName' => 'Hippo Fiber Tape #2',
                'price' => 100.0,
                'sellingPrice' => 150.0,
                'unitCount' => '1 roll',
                'dateAdded' => '2022-05-23',
                'supplierID' => 10,
            ),
            40 => 
            array (
                'itemID' => 48,
                'brandID' => 24,
                'itemName' => 'Hippo Paint Brush 3/4in',
                'price' => 10.0,
                'sellingPrice' => 15.0,
                'unitCount' => '1 pc',
                'dateAdded' => '2022-05-23',
                'supplierID' => 10,
            ),
            41 => 
            array (
                'itemID' => 51,
                'brandID' => 26,
                'itemName' => '3M Sandpaper',
                'price' => 10.0,
                'sellingPrice' => 12.0,
                'unitCount' => '1 pc',
                'dateAdded' => '2022-05-23',
                'supplierID' => 11,
            ),
            42 => 
            array (
                'itemID' => 52,
                'brandID' => 26,
                'itemName' => '3M Rubbing Compound',
                'price' => 650.0,
                'sellingPrice' => 720.0,
                'unitCount' => '1 litre',
                'dateAdded' => '2022-05-23',
                'supplierID' => 11,
            ),
            43 => 
            array (
                'itemID' => 55,
                'brandID' => 3,
                'itemName' => 'Test',
                'price' => 454.0,
                'sellingPrice' => 4666.0,
                'unitCount' => 'piece',
                'dateAdded' => '2022-05-23',
                'supplierID' => 3,
            ),
        ));
        
        
    }
}