<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'Nama Barang',
        'Harga',
        'Stok',
        'Id Supplier'
    ];
}
