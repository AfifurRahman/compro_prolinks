<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsModel extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
    	"id",
    	"nama_depan",
        "nama_belakang",
    	"email",
    	"no_hp",
    	"pesan",
    ];
}
