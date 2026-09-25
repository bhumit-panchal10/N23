<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonial';

    protected $fillable = [
        'id',
        'service_id',
        'name',
        'photo',
        'designation',
        'description',
        'created_at',
        'updated_at',
    ];

    public function service()
    {
        return $this->belongsTo(
            Service::class,
            'service_id'
        );
    }
}
