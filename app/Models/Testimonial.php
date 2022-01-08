<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $connection = 'mongodb';

    protected $collection = 'testimonials';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'text', 'wall_id', 'user.name', 'user.email', 'user.avatar', 'user.title', 'is_approved'
    ];

    protected $cast = [
        'is_approved' => 'boolean'
    ];

    public function wall()
    {
        return $this->belongsTo(Wall::class);
    }
}
