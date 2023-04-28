<?php header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller {
    public function _construct(){
        parent::_construct();
    }
function login(){
   
   echo "hello"
}

}