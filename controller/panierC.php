<?php 
    include_once 'C:\xampp\htdocs\transportz\controller\config.php';
    include_once 'C:\xampp\htdocs\transportz\model\panier.php';

    class panierC{
        public function add(){
            if(isset($_GET['add'])){
            $con=config::getConnexion();
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                //something was posted
                $nomprod = trim($_POST['nomprod']);
                $qte     = (int) $_POST['qte'];
                $prix   = (float) $_POST['prix'];
                if(!empty($nomprod) && !empty($qte) && !empty($prix))
                {
                    //save to database
                    $sql = "INSERT INTO `panier`( `nom_prod`, `prix`, `qte`) VALUES ('$nomprod','$prix','$qte')";
                    try {
                        $query=$con->prepare($sql);
                        $query->execute();
                        header("Location:chart.php");
                    } catch (Exception $e) {
                        echo "Error " . $e->getMessage();
                        exit();
                    }
                    header("Location:chart.php");
                    die;
                }
            }
        }
        }

        public function read(){
            try {
                $con=config::getConnexion();
                // Create sql statment
                $sql = " select * from panier";
                $resultp = $con->query($sql);
                return $resultp;
            } catch (Exception $e) {
                echo "Error " . $e->getMessage();
                exit();
            }
        }

        public function delete(){
            if(isset($_GET['delete'])){
                $con=config::getConnexion();
                if(isset($_GET['delete'])){
                    $product_id = $_GET['delete'];
                    $sql ="DELETE FROM `panier` WHERE `id` = '$product_id' ";
                    try {
                        $query=$con->prepare($sql);
                        $query->execute();
                        header("Location:chart.php");
                    } catch (Exception $e) {
                        echo "Error " . $e->getMessage();
                        exit();
                    }
            }}
        }

    }




?>