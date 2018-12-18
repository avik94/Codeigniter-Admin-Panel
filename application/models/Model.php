<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model{

  // geting data
  public function getData($tableName){
    $qry = $this->db->get($tableName);
    $result = $qry->result();
    return $result;
  }

  // checking data
  public function checkLoginData($tableName,$data){
    $qry = $this->db->get_where($tableName,$data)->row();
    $row = count($qry);
    return $row;
  }
  // updating data
  public function updateData($idName,$tableName,$data){
    $this->db->where($idName,1);
    $this->db->update($tableName,$data);
  }
  // updating data by geting id with parameter
  public function updateDataById($idName,$id,$tableName,$data){
    $this->db->where($idName,$id);
    $this->db->update($tableName,$data);
  }


}

 ?>
