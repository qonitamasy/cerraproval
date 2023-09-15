<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';
    protected $guarded = ['id'];
    public $timestamps = false;

    protected $fillable = [
        'name', 'brand', 'modeltype', 'pemasaran', 'pembuat', 'alamat', 'localrepName', 'localrepAlamat', 'status'
    ];
}
