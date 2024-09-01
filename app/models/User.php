<?php 
namespace App\Models;

use App\core\Contracts\Model;
use App\core\Trait\FileDbTrait;
class User implements Model{
  use FileDbTrait;
}

?>