<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['status_name', 'status_desc'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
