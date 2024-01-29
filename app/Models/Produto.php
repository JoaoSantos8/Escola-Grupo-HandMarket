<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artesao;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'image',
        'artesao_id'
    ];

    public function artesaos()
    {
        return $this->belongsTo(Artesao::class, "artesao_id", "id");
    }
}
