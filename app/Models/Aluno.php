<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $with = ['turma'];

    public function turma(){
        return $this->belongsTo(Turma::class);
    }

}
