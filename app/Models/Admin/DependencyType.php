<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DependencyType extends Model {
  public function dependencies() {
    return $this->hasMany(Dependency::class);
  }
}
