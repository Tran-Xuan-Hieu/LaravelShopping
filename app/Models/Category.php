<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory; // Tạo dữ liễu giả định
    use SoftDeletes; // Tạo một xóa ngắn, ko xóa khỏi database
    protected $fillable = ['name', 'parent_id', 'slug'];
}
