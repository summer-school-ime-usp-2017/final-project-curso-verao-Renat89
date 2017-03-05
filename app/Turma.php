<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
  protected $fillable = [
    'periodo', 'nome_professor','nome_curso'
  ];

  public function curso()
   {
     return $this->belongsTo(Curso::class);
   }

   public function professor()
    {
      return $this->belongsTo(Professor::class);
    }

}
