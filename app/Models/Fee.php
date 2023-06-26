<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $fillable = ['adm', 'term', 'status','ammount','balance'];
    
    public function student()
    {
        return $this->belongsTo(Student::class, 'adm', 'adm');
    }
}
