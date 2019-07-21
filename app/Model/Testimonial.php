<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['picture', 'body', 'name', 'designation', 'is_active', 'is_draft', 'soft_delete'];
}
