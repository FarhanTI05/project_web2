<?php 
    require_once "layouts/header.php";
    require_once "layouts/menu.php";
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>

        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama pelanggan</th>
                    <th>Alamat Pelanggan</th>
                    <th>Motor_Id </th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['nama_pelanggan']?></td>
                        <td><?=$row['alamat_pelanggan']?></td>
                        <td><?=$row['motor_id']?></td>
                        <td><?=$row['quantity']?></td>
                        <td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
<?php require_once "layouts/footer.php"; ?>