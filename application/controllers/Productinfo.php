<?php
class Productinfo extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','cookie','user_helper'));
        $this->load->library('session');
        $this->load->model('Product');
    }
    public function show($id){
        $sql='select * from product where ID='.$id;
        $product=$this->Product->dbQueryRun($sql,"result_array");
        $sql='select * from addtocart where p_id='.$id.' and u_id=1';
        $cart=$this->Product->dbQueryRun($sql,"result_array");
        $data=array();
        $data['product']=$product;
        $data['cart']=$cart;
        $this->load->view('product_info',$data);

    }

}



?>