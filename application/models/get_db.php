<?php

class Get_db extends CI_Model{
    

    public function getAll(){
        
        $query = $this->db->query("SELECT * FROM tweeter");
        return $query->result();
        
    }
    
    public function insert($arr){
        $query = $this->db->insert('tweeter',$arr);
    }

    public function insert2($arr){
        $query = $this->db->insert_batch('tweeter',$arr);
    }
    
    public function update($data){
        $this->db->update("tweeter",$data,"id = 2");
    }
    
    public function update_bt($data){
        
        $this->db->update_batch("tweeter",$data,'id');
    }
    
    public function delete($d){
        $this->db->delete("tweeter",$d);
    }
}