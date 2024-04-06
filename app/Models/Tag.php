<?php

namespace App\Models;

use \App\Traits\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    use HasFactory;
    use HasTimestamps;

    protected $table = 'tags';

    protected $fillable = [
        'name',
        'slug',
    ];

//    public function createdAt(): string
//    {
//        return $this->createdAt()->format('d-m-Y');
//    }

    public function threads(): MorphToMany
    {
        return $this->morphedByMany(Thread::class, 'taggable');
    }
}
