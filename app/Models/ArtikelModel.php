<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $fillable = [
    	"id",
    	"category_article_id",
        "judul",
    	"deskripsi",
    	"penulis",
    	"link",
    	"image",
    	"slug",
    	"status",
    ];

    public function RefCategory()
    {
        return $this->hasOne('App\Models\KategoriArtikelModel', 'id' , 'category_article_id');
    }

    public function RefPenulis()
    {
        return $this->hasOne('App\Models\TeamModel', 'id' , 'penulis');
    }
}
