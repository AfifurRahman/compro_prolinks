<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationModel extends Model
{
    /*
        1 => About Us
        2 => Contact
        3 => Social Media
        4 => Vision
        5 => Mision
        6 => Key values principles
        7 => Homepage Banner 1
        8 => Homepage Banner 2
        9 => Homepage Banner 3
    */
    use HasFactory;

    protected $table = 'information_content';

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
