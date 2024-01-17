<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    // Accessor for 'titel' inside 'sections'
    public function getTitelAttribute($value)
    {
        $sections = $this->getSectionsAttribute();
        return $sections['titel'] ?? $value;
    }

    // Mutator for 'titel' inside 'sections'
    public function setTitelAttribute($value)
    {
        $sections = $this->getSectionsAttribute();
        $sections['titel'] = $value;
        $this->setSectionsAttribute($sections);
    }

    // Accessor for 'description' inside 'sections'
    public function getDescriptionAttribute($value)
    {
        $sections = $this->getSectionsAttribute();
        return $sections['description'] ?? $value;
    }

    // Mutator for 'description' inside 'sections'
    public function setDescriptionAttribute($value)
    {
        $sections = $this->getSectionsAttribute();
        $sections['description'] = $value;
        $this->setSectionsAttribute($sections);
    }

    // Accessor for 'image' inside 'sections'
    public function getImageAttribute($value)
    {
        $sections = $this->getSectionsAttribute();
        return $sections['image'] ?? $value;
    }

    // Mutator for 'image' inside 'sections'
    public function setImageAttribute($value)
    {
        $sections = $this->getSectionsAttribute();
        $sections['image'] = $value;
        $this->setSectionsAttribute($sections);
    }

    // Accessor for 'sections' attribute
    public function getSectionsAttribute()
    {
        return json_decode($this->attributes['sections'], true) ?? [];
    }

    // Mutator for 'sections' attribute
    public function setSectionsAttribute($value)
    {
        $this->attributes['sections'] = json_encode($value);
    }
}