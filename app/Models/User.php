<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $ip_address ip address
@property varchar $username username
@property varchar $password password
@property varchar $salt salt
@property varchar $email email
@property varchar $activation_code activation code
@property varchar $forgotten_password_code forgotten password code
@property int $forgotten_password_time forgotten password time
@property varchar $remember_code remember code
@property int $created_on created on
@property int $last_login last login
@property int $active active
@property varchar $full_name full name
@property varchar $photo photo
@property text $additional additional
   
 */
class User extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'users';

    /**
    * Mass assignable columns
    */
    protected $fillable=['additional',
'ip_address',
'username',
'salt',
'email',
'activation_code',
'forgotten_password_code',
'forgotten_password_time',
'remember_code',
'created_on',
'last_login',
'active',
'full_name',
'photo',
'additional'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}