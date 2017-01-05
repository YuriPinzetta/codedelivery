<?php

use CodeDelivery\Models\Category;
use CodeDelivery\Models\Cupom;
use CodeDelivery\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OAuthClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->insert([
            'id' => 'appid01',
            'secret' => 'secret',
            'app' => 'Minha App Mobile'
        ]);
    }
}
