<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $table = 'department';
    public $fillable = [
        'code',
        'name',
        'description',
    ];

    public function Employee()
    {
        return $this->hasMany(Employee::class);
    }
}
