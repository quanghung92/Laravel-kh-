<?php

use Illuminate\Database\Seeder;

class value_product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('value_product')->delete();
        DB::table('value_product')->insert([
            ['product_id'=>1,'value_id'=>1],
            ['product_id'=>1,'value_id'=>2],
            ['product_id'=>1,'value_id'=>4],

            ['product_id'=>2,'value_id'=>2],
            ['product_id'=>2,'value_id'=>3],
            ['product_id'=>2,'value_id'=>5],

            ['product_id'=>3,'value_id'=>3],
            ['product_id'=>3,'value_id'=>5],
            ['product_id'=>3,'value_id'=>6],

            ['product_id'=>4,'value_id'=>2],
            ['product_id'=>4,'value_id'=>4],
            ['product_id'=>4,'value_id'=>6],

            ['product_id'=>5,'value_id'=>2],
            ['product_id'=>5,'value_id'=>4],
            ['product_id'=>5,'value_id'=>5],

        ]);
    }
}
