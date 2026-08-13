<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Migration extends Model
{
    protected $table = 'migrations';
    public $timestamps = false; // tabel migrations gak punya created_at/updated_at
    protected $guarded = [];
}