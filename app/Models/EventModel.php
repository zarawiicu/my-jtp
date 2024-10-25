<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primarykey = 'id';

    protected $fillable = ['judul', 'deskripsi', 'gambar'];

    public function getIdAttribute()
    {
        return strtoupper($this->attributes['id']);
    }
}
