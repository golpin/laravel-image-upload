<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_upload extends Model
{
    use HasFactory;
    protected $table = "image_upload";
	protected $fillable =
    [
        'title',
        'image',
    ];
}
