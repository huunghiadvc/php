<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'height', 'length_col', 'width', 'base_unit', 'producer', 'quantity', 'status', 'inserted_time', 'inserted_by', 'updated_at', 'updated_by'];
}
