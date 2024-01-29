<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;


class Artesao extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nome',
        'idade',
        'telefone',
        'dataRegisto',
        'image'
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class, "artesao_id", "id");
    }

}
