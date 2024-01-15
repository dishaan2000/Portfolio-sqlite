<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

}