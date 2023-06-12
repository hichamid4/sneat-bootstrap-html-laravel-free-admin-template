<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $offers_id
 * @property string $comment
 * @property integer $like
 * @property integer $dislike
 * @property integer $rate
 * @property string $created_at
 * @property string $updated_at
 * @property Offer $offer
 */
class Review extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['offers_id', 'comment', 'like', 'dislike', 'rate', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function offer()
    {
        return $this->belongsTo('App\Models\Offer', 'offers_id');
    }
}
