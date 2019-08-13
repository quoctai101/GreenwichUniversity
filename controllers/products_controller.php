<?php
require_once('controllers/base_controller.php');
require_once('models/product.php');

class ProductsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'products';
  }

  public function index()
  {
    $products = Product::all();
    $data = array('products' => $products);
    $this->render('index', $data);
  }
  public function show()
  {
    if(isset($_GET['id'])) $product = Product::find($_GET['id']);
    else $product = Product::find(-1);
    $data = array('product' => $product);
    $this->render('show', $data);
  }
  public function add()
  {
    Product::add($_POST['name'],$_POST['img'],$_POST['quantity'],$_POST['cost']);
    header("Location: https://dashboard-toyshop.herokuapp.com/?controller=products");
  }
  public function update()
  {
    $id = intval($_POST['id']);
    Product::update($id,$_POST['name'],$_POST['img'],$_POST['quantity'],$_POST['cost']);
    header("Location: https://dashboard-toyshop.herokuapp.com/?controller=products");
  }
  public function delete()
  {
    Product::delete($_GET['id']);
    header("Location: https://dashboard-toyshop.herokuapp.com/?controller=products");
  }
}