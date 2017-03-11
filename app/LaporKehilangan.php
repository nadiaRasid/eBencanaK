<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class LaporKehilangan extends Model
{

  public function user()
  {
      return $this->belongsTo(User::class);
  }

}
