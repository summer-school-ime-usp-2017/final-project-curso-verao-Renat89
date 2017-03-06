<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
  protected $fillable = [
    'id_turma','nome_aluno'
  ];

  public function turma()
   {
     return $this->belongsTo(Turma::class);
}

  public function aluno()
      {
        return $this->belongsTo(Aluno::class);
      }
}
