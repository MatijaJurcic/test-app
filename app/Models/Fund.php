<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fund_categorie_id',
        'fund_sub_categorie_id',
        'isin',
        'wkn',
    ];

    public function categorie()
    {
        return $this->belongsTo(FundCategorie::class, 'fund_categorie_id');
    }

    public function subcategorie()
    {
        return $this->belongsTo(FundSubCategorie::class, 'fund_sub_categorie_id');
    }

    public function userFunds()
    {
        return $this->hasMany(UserFund::class, 'fund_id');
    }
}
