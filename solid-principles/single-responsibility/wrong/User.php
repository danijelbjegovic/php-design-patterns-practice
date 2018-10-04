<?php

class User {
    public function create(array $data)
    {
        try{
            //save user to database
        }catch(DatabaseException $e){
            $this->logError($e->getMessage());
        }
    }
    public function logError($message){
        //writte error to file
    }
}

//this class breaks single responsibility principle 
//as it has more then one responsibility 
//to create user and to log errors