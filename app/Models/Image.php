<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Image extends Authenticatable
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
    protected $table = 'images';
    public $fillable = [
        'image_url' ,'created_at', 'updated_at'
    ];
	
    public function users()
    {
        return $this->hasMany(User::class, 'image_id', 'id');
    }

}
