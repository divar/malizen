<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Village extends Model
{
    use HasFactory;

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function citizenAssociations(): HasMany
    {
        return $this->hasMany(CitizenAssociation::class);
    }

    public function neighborhoodAssociations(): HasMany
    {
        return $this->hasMany(NeighborhoodAssociation::class);
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
