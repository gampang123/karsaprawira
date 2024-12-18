<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    // Tabel yang digunakan
    protected $table = 'details';
    protected $primaryKey = 'id_detail'; // Kolom primary key
    public $timestamps = true;

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'id_projek',    // Foreign key dari tabel projects
        'nama_detail',  // Nama detail
        'foto_1',       // Path foto 1
        'foto_2',       // Path foto 2 (opsional)
        'foto_3',       // Path foto 3 (opsional)
    ];

    // Relasi ke model Project
    public function project()
    {
        return $this->belongsTo(Project::class, 'id_projek');
    }

    public function details()
    {
        return $this->hasMany(Detail::class, 'id_projek');
    }
}
