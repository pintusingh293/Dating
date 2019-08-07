<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User;
use Cache;
use Illuminate\Support\Facades\Auth;

class User_details extends Model
{
    protected $gaurded = [];
    protected $fillable = [
        'firstname',
                'lastname','dob',
                'gender',
                'seeking',
                'height',
                'marital_status',
                'body_type',
                'city',
                'state','country',
                // 'languages',
                'phone' ,
                'partnerDependability',
                'occupation',
                'friendshipBetweenPartners',
                'income',
                'sexual_compatibility',
                'exercise',
                'longest_relationship',
                'education_level',
                'medication'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function getUserId($id){
        $getId =User_Details::select('user_id')->where('id',$id)->first();
        return $getId->user_id;
    }

    public function isOnline($user_id){
        return Cache::has('active-user'.$user_id)->where($user_id ,'=',Auth::user()['id']);
    }


}
