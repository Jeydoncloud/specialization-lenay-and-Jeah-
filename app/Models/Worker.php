<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age'
    ];
    public function works(){
        return $this->belongsToMany(Work::class)->withPivot('sample' , 'sample1');
    }

    }

