<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundSubCategorie extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name'];

      public function category()
      {
          return $this->belongsTo(FundCategory::class, 'category_id');
      }
  
      public function funds()
      {
          return $this->hasMany(Fund::class, 'fund_subcategory_id');
      }
}
