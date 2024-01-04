<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the URL for the project's image.
     *
     * @return string
     */
    public function getImageUrl()
    {
        return Storage::url($this->image);
    }
}


