<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property integer $id
 * @property string $username
 * @property string $fullName
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $CIN
 * @property string $gender
 * @property string $image
 * @property string $status
 * @property string $birthday
 * @property integer $rate
 * @property string $created_at
 * @property string $updated_at
 * @property HandymanSkill[] $handymanSkills
 */
class Handyman extends Authenticatable
{
    use HasFactory,HasApiTokens,Notifiable;
    /**
     * @var array
     */
    protected $fillable = ['username', 'fullName', 'password', 'email', 'phone', 'address', 'city', 'CIN', 'gender', 'image', 'status', 'birthday', 'rate', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function handymanSkills()
    {
        return $this->hasMany('App\Models\HandymanSkill', 'handymen_id');
    }
}