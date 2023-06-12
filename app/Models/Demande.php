<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $home_owners_id
 * @property string $title
 * @property string $StartDate
 * @property string $created_at
 * @property string $updated_at
 * @property HomeOwner $homeOwner
 * @property Message[] $messages
 * @property Picture[] $pictures
 */
class Demande extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['home_owners_id', 'title', 'StartDate', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function homeOwner()
    {
        return $this->belongsTo('App\Models\HomeOwner', 'home_owners_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Models\Message', 'demandes_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pictures()
    {
        return $this->hasMany('App\Models\Picture', 'demandes_id');
    }
}
