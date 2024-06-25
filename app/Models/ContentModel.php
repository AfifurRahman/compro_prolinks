<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentModel extends Model
{
    /*
        1 => Slider
        2 => Industries
        3 => Services
    */
    use HasFactory;

    protected $table = 'content';

    protected $fillable = [
    	"id",
    	"type_content",
        "title",
    	"description",
    	"status",
    	"link",
    	"image",
    	"slug",
    	"value1",
    	"value2",
    	"value3",
    	"value4",
    	"value5",
    ];
}
