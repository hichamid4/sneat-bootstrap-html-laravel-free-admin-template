<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $price
 * @property string $startDate
 * @property string $endtDate
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property Message[] $messages
 * @property Review[] $reviews
 */
class Offer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['price', 'startDate', 'endtDate', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Models\Message', 'offers_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany('App\Models\Review', 'offers_id');
    }
}
