<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'fund_category_id', 'fund_subcategory_id', 'isin', 'wkn'];

     public function category()
     {
         return $this->belongsTo(FundCategory::class, 'fund_category_id');
     }
 
     public function subcategory()
     {
         return $this->belongsTo(FundSubCategory::class, 'fund_subcategory_id');
     }
 
     public function userFunds()
     {
         return $this->hasMany(UserFund::class, 'fund_id');
     }
}
