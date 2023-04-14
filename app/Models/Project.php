<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'url',
        'content',
        'slug',
        'image',
        'user_id',
    ];
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'project_skill');
    }

    public function user()
    {
        return $this->belongsTo(USer::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}