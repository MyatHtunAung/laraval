<?php

use Illuminate\Database\Seeder;

class DefautlStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = date('Y-m-d H:i:s');
DB::table('students')->delete();
$objs = array(
['id'=>1, 'name'=>'Mg Mg', 'created_at'=>$today],
['id'=>2, 'name'=>'Hla Hla', 'created_at'=>$today]
);
DB::table('students')->insert($objs);
    }
}
