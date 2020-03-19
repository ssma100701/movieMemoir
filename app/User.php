<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $gender
 * @property string $dob
 * @property string $address
 * @property string $state
 * @property string $postcode
 * @property Credential[] $credentials
 * @property Memoir[] $memoirs
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user';

    /**
     * @var array
     */
    protected $fillable = ['name', 'surname', 'gender', 'dob', 'address', 'state', 'postcode'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function credentials()
    {
        return $this->hasMany('App\Credential', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function memoirs()
    {
        return $this->hasMany('App\Memoir', 'userid');
    }
}
