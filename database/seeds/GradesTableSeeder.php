<?php

use Illuminate\Database\Seeder;

use App\Grade;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//1
       $grade = new Grade();
       $grade->name = "FormacionProfesional";
       $grade->save();
       //2
       $grade = new Grade();
       $grade->name = "Bachillerato";
       $grade->save();
       //3
       $grade = new Grade();
       $grade->name = "Eso";
       $grade->save();
       //4
       $grade = new Grade();
       $grade->name = "DAW";
       $grade->grade_id = 1;
       $grade->save();
       //5
       $grade = new Grade();
       $grade->name = "DAM";
       $grade->grade_id = 1;
       $grade->save();
       //6
       $grade = new Grade();
       $grade->name = "ASIR";
       $grade->grade_id = 1;
       $grade->save();
       //7
       $grade = new Grade();
       $grade->name = "1DAW";
       $grade->grade_id = 4;
       $grade->keycourse = 'keydaw1';
       $grade->save();
       //8
       $grade = new Grade();
       $grade->name = "2DAW";
       $grade->grade_id = 4;
       $grade->keycourse = 'keydaw2';
       $grade->save();
       //9
       $grade = new Grade();
       $grade->name = "1ASIR";
       $grade->grade_id = 6;
       $grade->keycourse = 'keyasir1';
       $grade->save();
       //10
       $grade = new Grade();
       $grade->name = "2ASIR";
       $grade->grade_id = 4;
       $grade->keycourse = 'keyasir2';
       $grade->save();
       //11
       $grade = new Grade();
       $grade->name = "1DAM";
       $grade->grade_id = 4;
       $grade->keycourse = 'keydam1';
       $grade->save();
       //12
       $grade = new Grade();
       $grade->name = "2DAM";
       $grade->grade_id = 4;
       $grade->keycourse = 'keydam2';
       $grade->save();
       //13
       $grade = new Grade();
       $grade->name = "Ciencias";
       $grade->grade_id = 2;
       $grade->save();
       //14
       $grade = new Grade();
       $grade->name = "Humanidades";
       $grade->grade_id = 2;
       $grade->save();
       //15
       $grade = new Grade();
       $grade->name = "Arte";
       $grade->grade_id = 2;
       $grade->save();
       //16
       $grade = new Grade();
       $grade->name = "1Ciclo";
       $grade->grade_id = 3;
       $grade->save();
       //17
       $grade = new Grade();
       $grade->name = "2Ciclo";
       $grade->grade_id = 1;
       $grade->save();



    }
}
