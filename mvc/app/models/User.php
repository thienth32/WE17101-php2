<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'phone_number',
        'role_id'
    ];
}
?>