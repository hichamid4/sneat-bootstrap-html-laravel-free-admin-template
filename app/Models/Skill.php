<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property HandymanSkill[] $handymanSkills
 * @property Picture[] $pictures
 */
class Skill extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function handymanSkills()
    {
        return $this->hasMany('App\Models\HandymanSkill', 'skills_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pictures()
    {
        return $this->hasMany('App\Models\Picture', 'skills_id');
    }
}
