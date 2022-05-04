<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DependencyAreaSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla dependency_areas
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DB::table('dependency_areas')->insert([
      ['id' =>  1, 'dependency_id' =>  1, 'area_id' => 1],
      ['id' =>  2, 'dependency_id' =>  1, 'area_id' => 2],
      ['id' =>  3, 'dependency_id' =>  1, 'area_id' => 3],
      ['id' =>  4, 'dependency_id' =>  1, 'area_id' => 4],
      ['id' =>  5, 'dependency_id' =>  1, 'area_id' => 5],
      ['id' =>  6, 'dependency_id' =>  2, 'area_id' => 6],
      ['id' =>  7, 'dependency_id' =>  3, 'area_id' => 7],
      ['id' =>  8, 'dependency_id' =>  3, 'area_id' => 8],
      ['id' =>  9, 'dependency_id' =>  3, 'area_id' => 9],
      ['id' => 10, 'dependency_id' =>  3, 'area_id' => 10],
      ['id' => 11, 'dependency_id' =>  3, 'area_id' => 11],
      ['id' => 12, 'dependency_id' =>  3, 'area_id' => 12],
      ['id' => 13, 'dependency_id' =>  4, 'area_id' => 6],
      ['id' => 14, 'dependency_id' =>  4, 'area_id' => 13],
      ['id' => 15, 'dependency_id' =>  4, 'area_id' => 14],
      ['id' => 16, 'dependency_id' =>  4, 'area_id' => 15],
      ['id' => 17, 'dependency_id' =>  4, 'area_id' => 16],
      ['id' => 18, 'dependency_id' =>  4, 'area_id' => 17],
      ['id' => 19, 'dependency_id' =>  4, 'area_id' => 18],
      ['id' => 20, 'dependency_id' =>  5, 'area_id' => 6],
      ['id' => 21, 'dependency_id' =>  5, 'area_id' => 7],
      ['id' => 22, 'dependency_id' =>  5, 'area_id' => 19],
      ['id' => 23, 'dependency_id' =>  5, 'area_id' => 20],
      ['id' => 24, 'dependency_id' =>  5, 'area_id' => 21],
      ['id' => 25, 'dependency_id' =>  5, 'area_id' => 22],
      ['id' => 26, 'dependency_id' =>  5, 'area_id' => 23],
      ['id' => 27, 'dependency_id' =>  6, 'area_id' => 6],
      ['id' => 28, 'dependency_id' =>  6, 'area_id' => 7],
      ['id' => 29, 'dependency_id' =>  6, 'area_id' => 24],
      ['id' => 30, 'dependency_id' =>  6, 'area_id' => 25],
      ['id' => 31, 'dependency_id' =>  6, 'area_id' => 26],
      ['id' => 32, 'dependency_id' =>  6, 'area_id' => 27],
      ['id' => 33, 'dependency_id' =>  6, 'area_id' => 28],
      ['id' => 34, 'dependency_id' =>  7, 'area_id' => 29],
      ['id' => 35, 'dependency_id' =>  7, 'area_id' => 30],
      ['id' => 36, 'dependency_id' =>  7, 'area_id' => 31],
      ['id' => 37, 'dependency_id' =>  7, 'area_id' => 32],
      ['id' => 38, 'dependency_id' =>  7, 'area_id' => 33],
      ['id' => 39, 'dependency_id' =>  7, 'area_id' => 34],
      ['id' => 40, 'dependency_id' =>  8, 'area_id' => 35],
      ['id' => 41, 'dependency_id' =>  8, 'area_id' => 36],
      ['id' => 42, 'dependency_id' =>  8, 'area_id' => 37],
      ['id' => 43, 'dependency_id' =>  8, 'area_id' => 38],
      ['id' => 44, 'dependency_id' =>  8, 'area_id' => 39],
      ['id' => 45, 'dependency_id' =>  8, 'area_id' => 40],
      ['id' => 46, 'dependency_id' =>  8, 'area_id' => 41],
      ['id' => 47, 'dependency_id' =>  9, 'area_id' => 42],
      ['id' => 48, 'dependency_id' =>  9, 'area_id' => 43],
      ['id' => 49, 'dependency_id' =>  9, 'area_id' => 44],
      ['id' => 50, 'dependency_id' =>  9, 'area_id' => 45],
      ['id' => 51, 'dependency_id' =>  9, 'area_id' => 46],
      ['id' => 52, 'dependency_id' =>  9, 'area_id' => 47],
      ['id' => 53, 'dependency_id' =>  9, 'area_id' => 48],
      ['id' => 54, 'dependency_id' => 10, 'area_id' => 6],
      ['id' => 55, 'dependency_id' => 10, 'area_id' => 49],
      ['id' => 56, 'dependency_id' => 10, 'area_id' => 50],
      ['id' => 57, 'dependency_id' => 10, 'area_id' => 51],
      ['id' => 58, 'dependency_id' => 10, 'area_id' => 52],
      ['id' => 59, 'dependency_id' => 10, 'area_id' => 53],
      ['id' => 60, 'dependency_id' => 10, 'area_id' => 54],
      ['id' => 61, 'dependency_id' => 10, 'area_id' => 55],
      ['id' => 62, 'dependency_id' => 11, 'area_id' => 56],
      ['id' => 63, 'dependency_id' => 11, 'area_id' => 57],
      ['id' => 64, 'dependency_id' => 11, 'area_id' => 58],
      ['id' => 65, 'dependency_id' => 11, 'area_id' => 59],
      ['id' => 66, 'dependency_id' => 11, 'area_id' => 60],
      ['id' => 67, 'dependency_id' => 12, 'area_id' => 61],
      ['id' => 68, 'dependency_id' => 12, 'area_id' => 62],
      ['id' => 69, 'dependency_id' => 12, 'area_id' => 63],
      ['id' => 70, 'dependency_id' => 12, 'area_id' => 64],
      ['id' => 71, 'dependency_id' => 12, 'area_id' => 65],
      ['id' => 72, 'dependency_id' => 12, 'area_id' => 66],
      ['id' => 73, 'dependency_id' => 12, 'area_id' => 7],
      ['id' => 74, 'dependency_id' => 13, 'area_id' => 67],
      ['id' => 75, 'dependency_id' => 14, 'area_id' => 67],
      ['id' => 76, 'dependency_id' => 15, 'area_id' => 67],
      ['id' => 77, 'dependency_id' => 16, 'area_id' => 67],
      ['id' => 78, 'dependency_id' => 17, 'area_id' => 67],
      ['id' => 79, 'dependency_id' => 18, 'area_id' => 67],
      ['id' => 80, 'dependency_id' => 19, 'area_id' => 67],
      ['id' => 81, 'dependency_id' => 20, 'area_id' => 67],
      ['id' => 82, 'dependency_id' => 21, 'area_id' => 67],
      ['id' => 83, 'dependency_id' => 22, 'area_id' => 67],
      ['id' => 84, 'dependency_id' => 23, 'area_id' => 67],
      ['id' => 85, 'dependency_id' => 24, 'area_id' => 67],
    ]);
  }
}
