<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tenant_location_id',
        'isOpen',
    ];

    protected $casts = [
        'isOpen' => 'boolean',
    ];

}
