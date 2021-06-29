<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'agama', 'alamat', 'avatar', 'role', 'user_id'];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('images/download.jpg');
        }
        return asset('images/' . $this->avatar);
    }

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot('nilai')->withTimestamps();
    }
}
