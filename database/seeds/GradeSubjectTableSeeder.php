<?php

use Illuminate\Database\Seeder;
use App\GradeSubject;

class GradeSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//ASIGNATURAS 1DAW

    	$var = new GradeSubject();
       	$var->grade_id = 7;
       	$var->subject_id = 1;
       	$var->save();

    	$var = new GradeSubject();
       	$var->grade_id = 7;
       	$var->subject_id = 2;
       	$var->save();

    	$var = new GradeSubject();
       	$var->grade_id = 7;
       	$var->subject_id = 3;
       	$var->save();
        
    	$var = new GradeSubject();
       	$var->grade_id = 7;
       	$var->subject_id = 4;
       	$var->save();

    	$var = new GradeSubject();
       	$var->grade_id = 7;
       	$var->subject_id = 5;
       	$var->save();

    	$var = new GradeSubject();
       	$var->grade_id = 7;
       	$var->subject_id = 6;
       	$var->save();

    	$var = new GradeSubject();
       	$var->grade_id = 7;
       	$var->subject_id = 7;
       	$var->save();
//ASIGNATURAS 2DAW
    	$var = new GradeSubject();
       	$var->grade_id = 8;
       	$var->subject_id = 8;
       	$var->save();

    	$var = new GradeSubject();
       	$var->grade_id = 8;
       	$var->subject_id = 9;
       	$var->save();

    	$var = new GradeSubject();
       	$var->grade_id = 8;
       	$var->subject_id = 10;
       	$var->save();

       	$var = new GradeSubject();
       	$var->grade_id = 8;
       	$var->subject_id = 11;
       	$var->save();

       	$var = new GradeSubject();
       	$var->grade_id = 8;
       	$var->subject_id = 12;
       	$var->save();

       	$var = new GradeSubject();
       	$var->grade_id = 8;
       	$var->subject_id = 13;
       	$var->save();






    }
}
