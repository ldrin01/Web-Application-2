<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$i=0;
    	while($i < 40){
    		DB::table('students')->insert([
		    	'idnum' => str_random(8),
		    	'fname' => str_random(13),
		    	'lname' => str_random(13),
		    	'age' => '100',
		    	'contactnum' => str_random(11),
		    	'program' => str_random(5),
		    	'city' => str_random(8),
		    	'guardian' => str_random(13)
		    ]);
			$i++;	
			echo $i;
    	}
    }
}
