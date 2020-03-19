<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $userid
 * @property string $username
 * @property string $password_hash
 * @property string $signup_date
 * @property User $user
 */
class Credential extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'credential';

    /**
     * @var array
     */
    protected $fillable = ['userid', 'username', 'password_hash', 'signup_date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'userid');
    }
}
