<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikelModel extends Model
{
    use HasFactory;

    protected $table = 'category_article';

    protected $fillable = [
    	"id",
    	"nama_kategori",
        "slug",
    	"status",
    ];
}
