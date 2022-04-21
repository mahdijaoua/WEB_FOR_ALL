<?php 
    include_once 'C:\xampp\htdocs\transportz\controller\config.php';
    include_once 'C:\xampp\htdocs\transportz\model\command.php';

    class commandC{

        function add()
        {
            if(isset($_GET['add'])){
            $con=config::getConnexion();
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                //something was posted
                $product_name    = trim($_POST['product_name']);
                $photo    = trim($_POST['photo']);
                $categorie = trim($_POST['categorie']);
                $product_description = trim($_POST['product_description']);
                $quantity     = (int) $_POST['quantity'];
                $product_price   = (float) $_POST['product_price'];
                if(!empty($product_name) && !empty($quantity) && !empty($product_price))
                {
        
                    //save to database
                    $sql = "insert into products (product_name,categorie,product_description,quantity,product_price,photo) values ('$product_name','$categorie','$product_description','$quantity','$product_price','$photo')";
                    try {
                        $query=$con->prepare($sql);
                        $query->execute();
                        header("Location:apps-ecommerce-products.php");
                    } catch (Exception $e) {
                        echo "Error " . $e->getMessage();
                        exit();
                    }
                    header("Location: apps-ecommerce-products.php");
                    die;
                }
            }
        }
        }

    }




?>