<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function updateAvatar($image)
    {
        $fileName = $image->getClientOriginalName();
        (new Self())->checkAndDeleteAvatar();
        $image->storeAs('images', $fileName, 'public');
        auth()->user()->update(['avatar' => $fileName]);
    }
    protected function checkAndDeleteAvatar()
    {
        if (auth()->user()->avatar) {
            Storage::delete('/public/images' . auth()->user()->avatar);
        }
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
