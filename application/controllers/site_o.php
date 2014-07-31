<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        
    }


public function index(){
    var_dump($this->data);
   echo $this->addStuff();
}

public  function addStuff(){
    $this->load->model("math");
   return $this->math->add(7,8);
}

public function home(){
    
    $data['data'] = array("Welcome to this website on local","volia",$this->addStuff());
    
    $this->load->view("home",$data);
    
}

public function getValues(){
    $this->load->model("get_db"); 
    $data['results'] = $this->get_db->getAll();
    
    $this->load->view("dbfetch_view", $data);
}
    

public function insertValues(){
    
   $arrydata = array('first_name' => 'Lima');
    $arrybat = array(
   array(
      
      'first_name' => 'My Name' ,
      'last_name' => 'My date'
   ),
   array(
      
      'first_name' => 'Another Name' ,
      'last_name' => 'Another date'
   )
);
    
    
    
    $this->load->model('get_db');
    
   $this->get_db->insert($arrydata);
    $this->get_db->insert2($arrybat);
    
    
    Echo 'added';
}

public function updateValues(){
    $this->load->model("get_db");
    
    $new = array('first_name' => 'bunty');
    $newbt = array(
        array(
            'id' => '4',
            'first_name' => 'lulla'
        ),
        array(
            'id' => '6',
            'last_name' => 'Dulla'
        )
    );
    $this->get_db->update($new);
    $this->get_db->update_bt($newbt);
    
    
}

public function deleteValues(){
    
    $this->load->model("get_db");
    
    $id = array("id"=>"4");
    
    $this->get_db->delete($id);
    
}

}

