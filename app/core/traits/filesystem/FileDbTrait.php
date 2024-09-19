<?php 
namespace App\core\traits\filesystem;

trait FileDbTrait{
    
    public function save(){

    }
    public function update(){

    }
    public function delete()
    {

    }
    public function find($id){

    }
    public function all(){

    }
    public function paginate($perPage){

    }
    public function count(){

    }
    public function where($column, $value){

        //get files
       // dd(__DIR__);
        $file=storage_path($this->schema);
        //dd($file);
        //Check file exists or not
        if(!file_exists($file))
        {
        
            throw new \Exception("$this->schema is not created yet!");
        }

        $data=file_get_contents($file);
        $users=json_decode($data, true);

        if(json_last_error()!==JSON_ERROR_NONE)
        {
            throw new \Exception("Error Processing Request: ".json_last_error_msg());
        }


       $user= array_filter($users,function ($user) use ($column,$value){
             return $user[$column] == $value;
        });


        return $user;


       

    }
    public function orderBy($column, $order){

    }
    public function join($table, $foreignKey, $localKey){

    }
    public function with($relations){

    }
    public function whereIn($column, $values){

    }
    public function whereNotIn($column, $values){

    }
    public function first(){
        
    }

    
}


?>