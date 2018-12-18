<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('email', '=', 'cabral.9santos@gmail.com')->count()) {
            $usuario = User::where('email', '=', 'cabral.9santos@gmail.com')->first();
            $usuario->name = "Gabriel";
            $usuario->email = "cabral.9santos@gmail.com";
            $usuario->password = bcrypt("123456");
            $usuario->save();
        } else {
            $usuario = new User;
            $usuario->name = "Gabriel";
            $usuario->email = "cabral.9santos@gmail.com";
            $usuario->password = bcrypt("123456");
            $usuario->save();
        }
    }
}
