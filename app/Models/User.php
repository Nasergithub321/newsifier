<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    use SoftDeletes;
    use HasRoles;

    protected $guard_name = 'api';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'username', 'karma_score', 'image_id', 'created_at', 'updated_at'
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }
}
