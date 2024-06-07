<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path',
        'file_name',
    ];

    /**
     * Get the full URL of the stored file.
     */
    public function getUrlAttribute()
    {
        return asset('storage/' . $this->file_path . '/' . $this->file_name);
    }
}
