<?php
    require_once 'app/model/Product.php';

    class ProductController{
        private $dataModel;
        public function __construct($dbConnnection)
        {
            $this->dataModel = new Product($dbConnnection);
        }
        public function index(){
            require 'app/view/viewHome.php';
        }
        public function showProductList(){
            $datap = $this->dataModel->getAllProduct();
            require 'app/view/viewProduct.php';
        }
        public function deleteProduct($Kd_Barang){
            $data = $this->dataModel->getDeleteProduct($Kd_Barang);
            header('location:index.php?navbar=Product');
        }
        public function addProduct(){            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Mengambil data dari form
                $Kd_Barang = $_POST['Kd_Barang'];
                $Nm_Barang = $_POST['Nm_Barang'];
                $Harga = $_POST['Harga'];
                $Stok = $_POST['Stok'];
        
                // Memanggil metode updateUser dari model
                if ($this->dataModel->getAddProduct($Kd_Barang, $Nm_Barang, $Harga, $Stok)) {
                    header("Location: index.php?navbar=Product"); // Redirect setelah update
                } else {
                    $error = "Gagal mengupdate data.";
                }
            }

            require 'app/view/formAddProduct.php';
        }
        public function updateProduct($Kd_Barang){
            $data = $this->dataModel->getKodeProduct($Kd_Barang);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Mengambil data dari form
                $Nm_Barang = $_POST['Nm_Barang'];
                $Harga = $_POST['Harga'];
                $Stok = $_POST['Stok'];
        
                // Memanggil metode updateUser dari model
                if ($this->dataModel->getUpdateProduct($Kd_Barang, $Nm_Barang, $Harga, $Stok)) {
                    header("Location: index.php?navbar=Product"); // Redirect setelah update
                } else {
                    $error = "Gagal mengupdate data.";
                }
            }
     
            require 'app/view/formUpdateProduct.php';
        }
    }
?>