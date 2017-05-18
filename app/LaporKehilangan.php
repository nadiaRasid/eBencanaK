<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class LaporKehilangan extends Model
{
  protected $fillable =['jenisBencana','namaMangsa','alamatMangsa','phoneMangsa','tarikhHilang','status','namaPusat'];
  protected $attributes = ['status'=> 'Sedang Diproses','namaPusat'=> 'Tiada'];


  public function user()
  {
      return $this->belongsTo(User::class);
  }

}
