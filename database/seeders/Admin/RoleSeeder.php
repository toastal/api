<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla roles
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DB::table('roles')->insert([
      ['id' => 1, 'name' => 'admin',    'description' => 'Auxiliar de Innovación Gubernamental'],
      ['id' => 2, 'name' => 'enlace',   'description' => 'Enlace Administrativo'],
      ['id' => 3, 'name' => 'servidor', 'description' => 'Servidor Público'],
    ]);
  }
}
