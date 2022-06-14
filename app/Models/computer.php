<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Computer;
use App\Models\Processor;

class Computer extends Model
{	
    use HasFactory;
	
    public function processors()
  {
    return $this->hasMany(Processor::class);
  }
}
