<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$courseChoices = array("BSIS", "BSA", "BSAT", "BSSW", "BAB", "OM", "ACT", "MCT", "NA", "IC");
    	$i = 0;
    	while ($i < 200) {
	    	$randKey = rand(0, 9);
	        DB::table('users')->insert([
	            'idnum' => '15-0'.rand(100, 9999),
	            'name' => str_random(rand(4, 8)).' '.str_random(rand(4, 8)),
	            'course' => $courseChoices[$randKey],
	            'year' => rand(1, 3),
	            'email' => str_random(10).'@gmail.com',
	            'password' => bcrypt('qwerty'),
	        ]);
	        $i++;
	        echo $i;
	    }
    }
}
