<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(category::class);
        $this->call(product::class);
        $this->call(user::class);
        $this->call(attribute::class);
        $this->call(value::class);
        $this->call(value_product::class);
        $this->call(variant::class);
        $this->call(variant_value::class);
    }
}
