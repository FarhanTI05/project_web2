<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama_motor'];
   $_cc = $_POST['cc'];
   $_harga = $_POST['harga'];
   $_stok = $_POST['stok'];
   $_merk = $_POST['merk_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 1
   $ar_data[]=$_cc; // ? 2
   $ar_data[]=$_harga; // ? 3
   $ar_data[]=$_stok; // 4
   $ar_data[]=$_merk; // ? 5

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO motor (nama_motor,cc,harga,stok,merk_id) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 6
    $sql = "UPDATE motor SET nama_motor=?,cc=?,harga=?,stok=?,
    merk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');
?>