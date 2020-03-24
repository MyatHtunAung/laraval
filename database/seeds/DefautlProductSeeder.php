<?php

use Illuminate\Database\Seeder;

class DefautlProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = date('Y-m-d H:i:s');
        DB::table('products')->delete();
        $objs = array(
        ['id'=>1, 'name'=>'phone','price'=>1000, 'brand'=>'vilvo', 'remark'=>'good', 'created_at'=>$today],
        ['id'=>2, 'name'=>'computer','price'=>900, 'brand'=>'lenovo', 'remark'=>'good', 'created_at'=>$today]
        );
        DB::table('products')->insert($objs);
            
    }
}
