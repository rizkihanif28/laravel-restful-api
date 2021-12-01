<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'address', 'status_id', 'in_date_at', 'out_date_at'];


    public function status()
    {
        return $this->hasOne(Status::class);
    }
}
