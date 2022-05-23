<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NeighborhoodAssociation extends Model
{
    use HasFactory;

    public function village(): BelongsTo
    {
        return $this->belongsTo(Village::class);
    }

    public function citizenAssociation(): BelongsTo
    {
        return $this->belongsTo(CitizenAssociation::class);
    }

    public function resident(): HasMany
    {
        return $this->hasMany(Resident::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
