<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $skills_id
 * @property integer $messages_id
 * @property integer $demandes_id
 * @property string $pic
 * @property string $created_at
 * @property string $updated_at
 * @property Demande $demande
 * @property Skill $skill
 * @property Message $message
 */
class Picture extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['skills_id', 'messages_id', 'demandes_id', 'pic', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function demande()
    {
        return $this->belongsTo('App\Models\Demande', 'demandes_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skill()
    {
        return $this->belongsTo('App\Models\Skill', 'skills_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function message()
    {
        return $this->belongsTo('App\Models\Message', 'messages_id');
    }
}
