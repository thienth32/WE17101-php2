<?php

abstract class BaseModel{
    abstract function find(int $id);
    abstract function all();
}

interface RoleITF{
    public function setRole($id);
    public function removeRole($user_id);
}

interface LogInfo{
    public function logTime();
}

class User extends BaseModel implements RoleITF, LogInfo{
    public function find($id){

    }

    public function all(){

    }

    public function setRole($id)
    {
        
    }

    public function removeRole($user_id)
    {
        
    }

    public function logTime()
    {
        
    }
}

?>