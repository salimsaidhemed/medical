<?php
require(APPPATH.'/libraries/REST_Controller.php');
class userAPI extends REST_Controller {
  private $header = "Content-Type: application/json";
  public function user_get(){
    $data = array('username' =>'admin');
    $this->response($data);
  }
  public function user_post(){

  }
  public function user_delete(){

  }
  public function user_put(){

  }
  public function users_get(){

  }
  public function user_search_get(){

  }
  public function userExists_get(){
    $this->response(array("just"=>"testing"));
  }

}
 ?>
