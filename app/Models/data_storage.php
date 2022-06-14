<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Computer;

class data_storage extends Model
{
	use HasFactory;
	
    public function computers()
  {
    return $this->belongsTo(Computer::class);
  }
}
