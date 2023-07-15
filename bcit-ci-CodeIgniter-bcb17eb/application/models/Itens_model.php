<?php
class Itens_model extends CI_model{
    public function buscaTodos(){
    return $this->db->get("items")->result_array();
}
}