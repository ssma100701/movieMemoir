<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $userid
 * @property int $cinema_id
 * @property string $movie_name
 * @property string $release_date
 * @property string $watched_date
 * @property string $comment
 * @property int $score
 * @property User $user
 * @property Cinema $cinema
 */
class Memoir extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'memoir';

    /**
     * @var array
     */
    protected $fillable = ['userid', 'cinema_id', 'movie_name', 'release_date', 'watched_date', 'comment', 'score'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'userid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }
}
