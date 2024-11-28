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
    // RequestModel.php

// RequestModel.php

public function project()
{
    return $this->belongsTo(Project::class, 'project_id'); // Adjust the foreign key if it's different
}

public function user()
{
    return $this->belongsTo(User::class, 'requestBy_id');
}


}
