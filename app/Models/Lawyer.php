<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lawyer extends Model
{
    protected $fillable = ['name', 'expertise', 'experience', 'contact', 'email', 'chamber_address', 'license_number', 'image'];

    public function lawsuits(): HasMany
    {
        return $this->hasMany(Lawsuit::class);
    }
}
