<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'subject', 'comment', 'status', 'soft_delete', 'datetime'];
}
