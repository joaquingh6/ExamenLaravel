<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//1
    	$subject = new Subject();
       	$subject->name = "Sistemasinformatios";
       	$subject->save();
       	//2
       	$subject = new Subject();
       	$subject->name = "Basesdedatos";
       	$subject->save();
       	//3
       	$subject = new Subject();
       	$subject->name = "Programacion";
       	$subject->save();
       	//4
       	$subject = new Subject();
       	$subject->name = "InglesTecnico";
       	$subject->save();
       	//5
       	$subject = new Subject();
       	$subject->name = "Entornosdedesarrollo";
       	$subject->save();
       	//6
       	$subject = new Subject();
       	$subject->name = "Fol";
       	$subject->save();
       	//7
       	$subject = new Subject();
       	$subject->name = "Empresa";
       	$subject->save();
		//8
       	$subject = new Subject();
       	$subject->name = "LenguajeDeMarcas";
       	$subject->save();
       	//9
       	$subject = new Subject();
       	$subject->name = "Javascript";
       	$subject->save();
       	//10
       	$subject = new Subject();
       	$subject->name = "PHP";
       	$subject->save();
 		//11
      	$subject = new Subject();
       	$subject->name = "DespligueDeAplicacionesWeb";
       	$subject->save();
       	//12
       	$subject = new Subject();
       	$subject->name = "CSS";
       	$subject->save();
       	//13
       	$subject = new Subject();
       	$subject->name = "Proyecto";
       	$subject->save();

        
    }
}
