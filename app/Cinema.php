<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $postcode
 * @property Memoir[] $memoirs
 */
class Cinema extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cinema';

    /**
     * @var array
     */
    protected $fillable = ['name', 'postcode'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function memoirs()
    {
        return $this->hasMany('App\Memoir');
    }
}
