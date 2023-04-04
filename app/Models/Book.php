<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Book as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Book extends Model
{
    protected $table="book";
    public $timestamp =false;
    protected $primaryKey = 'id';

    /**
     * 
     * @var array
     */
    protected $fillable = [
        'kode_buku',
        'judul',
        'pengarang',
        'jenis_buku',
        'harga',
        'qty',
    ];
};
