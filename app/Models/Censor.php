<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Censor extends Model
{
    protected $guarded = ['created_at','updated_at'];
    public function shouldBeSearchable()
    {
        return $this->isPublished();
    }
}
