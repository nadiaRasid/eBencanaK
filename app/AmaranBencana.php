<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class AmaranBencana extends Model
{
  protected $casts = [
    'is_published' => 'boolean'
  ];
  
  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
