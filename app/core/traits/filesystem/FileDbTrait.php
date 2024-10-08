<?php 
namespace App\core\traits\filesystem;

trait FileDbTrait{
    
    public function save(array $user){
        $file=storage_path($this->schema);

        //Get existing file
        $data=file_get_contents($file);
        $users=json_decode($data, true);
        //merge user to the users
        $users[]=$user;
        //convert users to json
        $data=json_encode($users);
        //save to json file
        file_put_contents($file, $data);
        return true;
        
    }
    public function update(){

    }
    public function delete()
    {

    }
    public function find($id){

    }
    public function all($column='',$value=''){
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
      // dd($users);

       if(json_last_error()!==JSON_ERROR_NONE)
       {
           throw new \Exception("Error Processing Request: ".json_last_error_msg());
       }


      $users=array_map(function ($user) use($column,$value){
        if($column==''||$value=='')
        {
            return $user;
        }else{

            if($user[$column] == $value)
            {
                return $user;
            }
        }
        return null;
      
      },$users);

      $users=array_values( array_filter($users));
    
       

        
       return $users??null;


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
       // dd($users);

        if(json_last_error()!==JSON_ERROR_NONE)
        {
            throw new \Exception("Error Processing Request: ".json_last_error_msg());
        }


       $user=array_values( array_filter($users,function ($user) use ($column,$value){
             return $user[$column] == $value;
        }))[0];
        //dd($user);
        

         
        return $user?$user:null;


       

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