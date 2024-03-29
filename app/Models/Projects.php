<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description"
    ];

    public function types()
    {
        return $this->belongsTo(Type::class);
    }
}
