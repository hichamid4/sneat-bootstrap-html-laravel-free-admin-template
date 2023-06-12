<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * @property integer $id
 * @property string $username
 * @property string $fullName
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property float $latitude
 * @property float $longitude
 * @property string $created_at
 * @property string $updated_at
 * @property Demande[] $demandes
 */
class HomeOwner extends Authenticatable
{
    /**
     * @var array
     */
    protected $fillable = ['username', 'fullName', 'password', 'email', 'phone', 'address', 'city', 'latitude', 'longitude', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function demandes()
    {
        return $this->hasMany('App\Models\Demande', 'home_owners_id');
    }
}
