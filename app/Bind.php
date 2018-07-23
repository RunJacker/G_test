<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/23
 * Time: 18:04
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Bind extends Model
{
    use Notifiable;
    protected $table = 'stx_user_bind';
    protected $primaryKey = 'user_id';

    public function findUser()
    {
        $this->hasOne('App\User','user_id');
    }
}