<?php

namespace App;

use App\User_details;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User_details;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cache;
use Illuminate\Support\Facades\Auth;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function user_detail(){
    // 	return $this->hasOne(User_details::class);
    // }

    public function details(){
        return $this->hasOne('App\User_details','user_id');
    }
    public static function datingProfileDetails($user_id){
        $datingProfile = User_details::where('user_id',$user_id)->first();
        return $datingProfile;
    }

    public static function datingProfileExists($user_id){
        $datingCount = User_details::select('user_id','status')->where(['user_id'=>$user_id,'status'=>1])->count();
        return $datingCount;
    }


    public function isOnline($user_id){
        $datingProfile = User_details::where('user_id',$user_id);
        return Cache::has('active-user'.$this->id,$datingProfile);
    }


    public static function getName($id){
        $getName = User::select('name')->where('id',$id)->first();
        return $getName->name;
    }

    public static function getCity($id){
        $getCity = User_details::select('city')->where('user_id',$id)->first();
        return $getCity->city;
    }

    public static function getId($id){
        $getId = User_details::select('id')->where('user_id',$id)->first();
        return $getId->id;
    }
}
