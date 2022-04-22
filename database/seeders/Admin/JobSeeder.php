<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla jobs
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DB::table('jobs')->insert([
      ['id' =>  1, 'name' => 'Abogado'],
      ['id' =>  2, 'name' => 'Administrador'],
      ['id' =>  3, 'name' => 'Agente de Vialidad'],
      ['id' =>  4, 'name' => 'Albañil'],
      ['id' =>  5, 'name' => 'Analista'],
      ['id' =>  6, 'name' => 'Archivista'],
      ['id' =>  7, 'name' => 'Auditor'],
      ['id' =>  8, 'name' => 'Auxiliar A'],
      ['id' =>  9, 'name' => 'Auxiliar B'],
      ['id' => 10, 'name' => 'Auxiliar C'],
      ['id' => 11, 'name' => 'Auxiliar Comisionado'],
      ['id' => 12, 'name' => 'Auxiliar de Apoyo'],
      ['id' => 13, 'name' => 'Auxiliar de Seguridad'],
      ['id' => 14, 'name' => 'Ayudante'],
      ['id' => 15, 'name' => 'Ayudante en Notificación'],
      ['id' => 16, 'name' => 'Bibliotecario'],
      ['id' => 17, 'name' => 'Bombero'],
      ['id' => 18, 'name' => 'Cadete'],
      ['id' => 19, 'name' => 'Cajero'],
      ['id' => 20, 'name' => 'Chófer'],
      ['id' => 21, 'name' => 'Chófer Funcionarios'],
      ['id' => 22, 'name' => 'Comisario'],
      ['id' => 23, 'name' => 'Coordinador A'],
      ['id' => 24, 'name' => 'Coordinador B'],
      ['id' => 25, 'name' => 'Coordinador de Área'],
      ['id' => 26, 'name' => 'Coordinador General'],
      ['id' => 27, 'name' => 'Cronista Municipal'],
      ['id' => 28, 'name' => 'Delegado'],
      ['id' => 29, 'name' => 'Director de Área'],
      ['id' => 30, 'name' => 'Director General'],
      ['id' => 31, 'name' => 'Electricista'],
      ['id' => 32, 'name' => 'Encargado A'],
      ['id' => 33, 'name' => 'Encargado B'],
      ['id' => 34, 'name' => 'Encargado C'],
      ['id' => 35, 'name' => 'Especialista Técnico'],
      ['id' => 36, 'name' => 'Inspector'],
      ['id' => 37, 'name' => 'Intendente'],
      ['id' => 38, 'name' => 'Jardinero'],
      ['id' => 39, 'name' => 'Jefatura A'],
      ['id' => 40, 'name' => 'Jefatura B'],
      ['id' => 41, 'name' => 'Jefatura C'],
      ['id' => 42, 'name' => 'Maestro'],
      ['id' => 43, 'name' => 'Matancero'],
      ['id' => 44, 'name' => 'Médico'],
      ['id' => 45, 'name' => 'Ministro Ejecutor'],
      ['id' => 46, 'name' => 'Notificador'],
      ['id' => 47, 'name' => 'Oficial'],
      ['id' => 48, 'name' => 'Oficial Calificador'],
      ['id' => 49, 'name' => 'Oficial de Cuadrilla'],
      ['id' => 50, 'name' => 'Oficial de Vialidad'],
      ['id' => 51, 'name' => 'Operador de Maquinaria o Barredora'],
      ['id' => 52, 'name' => 'Panteonero'],
      ['id' => 53, 'name' => 'Peluquero'],
      ['id' => 54, 'name' => 'Peón'],
      ['id' => 55, 'name' => 'Policía'],
      ['id' => 56, 'name' => 'Policía 1o.'],
      ['id' => 57, 'name' => 'Policía 2do.'],
      ['id' => 58, 'name' => 'Policía 3ro.'],
      ['id' => 59, 'name' => 'Policía Jefe Unidad de Análisis'],
      ['id' => 60, 'name' => 'Policía Jefe Unidad de Reacción'],
      ['id' => 61, 'name' => 'Policía Unidad de Análisis'],
      ['id' => 62, 'name' => 'Policía Unidad de Reacción'],
      ['id' => 63, 'name' => 'Presidente Municipal'],
      ['id' => 64, 'name' => 'Primer Comandante de Vialidad'],
      ['id' => 65, 'name' => 'Programador'],
      ['id' => 66, 'name' => 'Promotor'],
      ['id' => 67, 'name' => 'Recaudador'],
      ['id' => 68, 'name' => 'Regidor'],
      ['id' => 69, 'name' => 'Secretaria A'],
      ['id' => 70, 'name' => 'Secretaria B'],
      ['id' => 71, 'name' => 'Secretaria C'],
      ['id' => 72, 'name' => 'Secretario de Seguridad Ciudadana'],
      ['id' => 73, 'name' => 'Secretario del H. Ayuntamiento'],
      ['id' => 74, 'name' => 'Segundo Comandante de Vialidad'],
      ['id' => 75, 'name' => 'Síndico'],
      ['id' => 76, 'name' => 'Soldador'],
      ['id' => 77, 'name' => 'Subdelegado'],
      ['id' => 78, 'name' => 'Subdirector de Área'],
      ['id' => 79, 'name' => 'Subdirector General'],
      ['id' => 80, 'name' => 'Suboficial'],
      ['id' => 81, 'name' => 'Superintendente'],
      ['id' => 82, 'name' => 'Supervisor'],
      ['id' => 83, 'name' => 'Tasador'],
      ['id' => 84, 'name' => 'Tesorero'],
      ['id' => 85, 'name' => 'Topógrafo'],
      ['id' => 86, 'name' => 'Valuador'],
      ['id' => 87, 'name' => 'Velador'],
      ['id' => 88, 'name' => 'Veterinario'],
    ]);
  }
}
