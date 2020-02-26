<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelLogin extends Model
{
    // /**关联到数据库 */
     protected $table="login";


     public $primaryKey='login_id';  
     /**
      * 可以被批量赋值的属性
      * 
      */
      protected $fillable = ['login_name','login_pwd'];

      /**打上时间戳 */
      public $timestamps = false;
}
