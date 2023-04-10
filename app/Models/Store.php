<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of Store
 */
class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Summary of products
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}

