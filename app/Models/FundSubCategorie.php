<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundSubCategorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'categorie_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(FundCategorie::class, 'categorie_id');
    }

    public function funds()
    {
        return $this->hasMany(Fund::class, 'fund_sub_categorie_id');
    }
}
