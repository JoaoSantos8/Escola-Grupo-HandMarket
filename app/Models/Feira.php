<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feira extends Model
{
    use HasFactory;

    protected $fillable = [
        'feiraNome',
        'feiraDescricao',
        'feiraImagemURL',
        'feiraLocalizacao',
        'feiraDataInicio',
        'feiraDataFim',
        'feiraPreco',
    ];
}
