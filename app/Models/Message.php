<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $demandes_id
 * @property integer $offers_id
 * @property string $content
 * @property string $document
 * @property string $order
 * @property string $created_at
 * @property string $updated_at
 * @property Demande $demande
 * @property Offer $offer
 * @property Picture[] $pictures
 */
class Message extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['demandes_id', 'offers_id', 'content', 'document', 'order', 'created_at', 'updated_at'];

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
    public function offer()
    {
        return $this->belongsTo('App\Models\Offer', 'offers_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pictures()
    {
        return $this->hasMany('App\Models\Picture', 'messages_id');
    }
}
