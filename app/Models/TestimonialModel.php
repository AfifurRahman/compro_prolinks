<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialModel extends Model
{
    use HasFactory;

    protected $table = 'testimonial';

    protected $fillable = [
    	"id",
    	"image",
        "nama",
        "jabatan",
    	"deskripsi",
    	"slug",
    	"link",
    	"status",
    ];
}
