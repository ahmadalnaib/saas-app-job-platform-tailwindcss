<?php

namespace App\Models;

use App\Presenters\SubscriptionPresenter;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Subscription;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable,Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    public function plan()
    {
        return $this->hasOneThrough(
            Plan::class,Subscription::class,
            'user_id',
            'stripe_id',
            'id',
            'stripe_plan',

        );

    }

    public  function jobs()
    {
        return $this->hasMany(Job::class);
    }


    public function presentSubscription()
    {
        if(!$subscription =$this->subscription('default'))
        {
            return null;

        }
        return  new SubscriptionPresenter($subscription->asStripeSubscription());
    }


    public function getAvatar()
    {
        $firstChar=$this->email[0];

        if(is_numeric($firstChar)){
            $intToUse=ord(strtolower($firstChar))-21;
        } else{
            $intToUse=ord(strtolower($firstChar))-96;
        }

//        $randomInt=rand(1,36);

        return 'https://www.gravatar.com/avatar/'
            .md5($this->email)
            .'?s=200'
            .'&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-'
            .$intToUse
            .'.png';
    }


}
