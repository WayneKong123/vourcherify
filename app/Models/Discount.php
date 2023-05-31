<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $table = 'discounts';

    protected $fillable = ['code', 'type', 'value', 'max_redemptions', 'max_redemptions_per_user', 'expires_at', 'created_by'];

}
