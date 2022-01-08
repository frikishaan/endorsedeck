<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model;

class Wall extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $connection = 'mongodb';

    protected $collection = 'walls';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'name', 'user_id', 'logo', 'description', 'thankyou_page.title', 'thankyou_page.message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class, 'wall_id');
    }

}
