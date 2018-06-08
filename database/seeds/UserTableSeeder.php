<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_alumno = Role::where('name', 'Alumno')->first();

        $role_profesor = Role::where('name', 'Profesor')->first();

        $role_administrador = Role::where('name', 'Administrador')->first();

        $user = new User();

        $user->name = 'Administrador';

        $user->email = 'administrador@gmail.com';

        $user->password = bcrypt('secret');

        $user->save();

        $user->roles()->attach($role_administrador);

         $user = new User();

        $user->name = 'Profesor';

        $user->email = 'profesor@gmail.com';

        $user->password = bcrypt('secret');

        $user->save();

        $user->roles()->attach($role_profesor);


        $user = new User();

        $user->name = 'Alumno';

        $user->email = 'alumno@gmail.com';

        $user->password = bcrypt('secret');

        $user->save();

        $user->roles()->attach($role_alumno);

        //------------------------------------------------MVC---------------------------------------

         $user = new User();

        $user->name = 'Administrador';

        $user->email = 'm-administrador@gmail.com';

        $user->password = md5('secret');

        $user->save();

        $user->roles()->attach($role_administrador);

         $user = new User();

        $user->name = 'Profesor';

        $user->email = 'm-profesor@gmail.com';

        $user->password = md5('secret');

        $user->save();

        $user->roles()->attach($role_profesor);


        $user = new User();

        $user->name = 'Alumno';

        $user->email = 'm-alumno@gmail.com';

        $user->password = md5('secret');

        $user->save();

        $user->roles()->attach($role_alumno);

        Factory(App\User::class, 17)->create();


    }
}
