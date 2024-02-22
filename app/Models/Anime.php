<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Anime extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function type_name(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type', 'id');
    }
    public function studio_name(): BelongsTo
    {
        return $this->belongsTo(Studio::class, 'studio', 'id');
    }
    public function status_name(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status', 'id');
    }
    public function genre_name(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre', 'id');
    }
    public function country_name(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country', 'id');
    }
    public function musim_name(): BelongsTo
    {
        return $this->belongsTo(Musim::class, 'musim', 'id');
    }
    public function season_name(): BelongsTo
    {
        return $this->belongsTo(Season::class, 'season', 'id');
    }
    // public function episode_name(): HasMany
    // {
    //     return $this->hasMany(Episode::class, 'anime_id', 'id');
    // }
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
