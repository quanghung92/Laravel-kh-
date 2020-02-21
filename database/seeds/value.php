<?php

use Illuminate\Database\Seeder;

class value extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('value')->delete();
        DB::table('value')->insert([
            ['id'=>1,'value'=>'S','attr_id'=>1],
            ['id'=>2,'value'=>'M','attr_id'=>1],
            ['id'=>3,'value'=>'L','attr_id'=>1],
            ['id'=>4,'value'=>'Đỏ','attr_id'=>2],
            ['id'=>5,'value'=>'Xanh','attr_id'=>2],
            ['id'=>6,'value'=>'Đen','attr_id'=>2],
        ]);
    }
}
