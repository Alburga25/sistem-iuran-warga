<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Iuran extends Model
{
    protected $fillable = ['nama', 'jumlah'];

    public function tagihans(): HasMany
    {
        return $this->hasMany(Tagihan::class);
    }
}

