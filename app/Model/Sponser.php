<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sponser extends Model
{
    protected $fillable = ['title', 'picture', 'link', 'promotional_message', 'html_banner', 'is_active', 'is_draft', 'soft_delete'];
}
