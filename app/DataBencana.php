<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBencana extends Model
{
    public function user()
  {
      return $this->belongsTo(User::class);
  }
}
