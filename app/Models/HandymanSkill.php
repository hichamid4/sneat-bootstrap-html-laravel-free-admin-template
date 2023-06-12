<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $handymen_id
 * @property integer $skills_id
 * @property string $created_at
 * @property string $updated_at
 * @property Handyman $handyman
 * @property Skill $skill
 */
class HandymanSkill extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['handymen_id', 'skills_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function handyman()
    {
        return $this->belongsTo('App\Models\Handyman', 'handymen_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skill()
    {
        return $this->belongsTo('App\Models\Skill', 'skills_id');
    }
}
