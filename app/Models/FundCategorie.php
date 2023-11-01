<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundCategorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function subcategories()
    {
        return $this->hasMany(FundSubCategorie::class, 'categorie_id');
    }

    public function funds()
    {
        return $this->hasMany(Fund::class, 'fund_categorie_id');
    }
}
