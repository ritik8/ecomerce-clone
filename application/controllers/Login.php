<?php 

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','cookie','user_helper'));
        $this->load->library('session');
        $this->load->model('Product');
    }
    public function index(){
        if(isUserLogin()){
            $sql="select product.Id as p_id,product.title,product.description,product.price,product.product_pic,product.category,category.Id,category.Name from product inner join category on product.category=category.Id order by category.Id;";
            $product=$this->Product->dbQueryRun($sql,"result_array");
            $sql="select category.Id, count(product.Id) as c,category.name from product inner join category on product.category=category.Id GROUP BY category.Id;";
            $category=$this->Product->dbQueryRun($sql,"result_array");
            $data=array();
            $data['product']=$product;
            $data['category']=$category;
            $this->load->view('home',$data);
        }
   



    }
    public function pri(){
        return get_cookie('Name');
    }
    public function solve(){

        $this->load->view('solve');
    }
}

?>