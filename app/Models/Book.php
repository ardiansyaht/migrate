<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    // Opsional: Tentukan tabel jika nama tabel bukan bentuk jamak dari nama model
    protected $table = 'books';

    // Opsional: Tentukan atribut yang bisa diisi massal
    protected $fillable = ['title', 'author'];
}
