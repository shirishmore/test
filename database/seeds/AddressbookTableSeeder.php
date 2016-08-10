<?php

use App\Addressbook;
use Illuminate\Database\Seeder;

class AddressbookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addressbook')->truncate();
        Addressbook::create(array(
            'address_title' => 'Home',
            'contact_name'     => 'John Doe',
            'contact_phone'     => '9820098200',
            'address1' => 'LBS marg',
            'address2' => 'andheri',
            'address3' => '400605',
            'pincode' => '400605',
            'state' => 'Mah',
            'city' => 'mumbai',
            'country' => 'India'
        ));
    }
}
