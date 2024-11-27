<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
    'givenBy_id',
    'requestBy_id', // Correct field
    'assigned_to',
    ];
}
