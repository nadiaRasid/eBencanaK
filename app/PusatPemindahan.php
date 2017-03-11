<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class PusatPemindahan extends Model
{
      return $this->belongsTo(User::class);
}
