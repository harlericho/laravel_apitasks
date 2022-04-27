<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $fillable = ['name', 'description', 'completed'];
    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at'];
}
