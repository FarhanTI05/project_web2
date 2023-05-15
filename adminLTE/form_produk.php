<?php 
    require_once "layouts/header.php";
    require_once "layouts/menu.php";
    require_once 'dbkoneksi.php';
?>
            
<form method="POST" action="proses_produk.php">
  <div class="form-group row">
    <label for="nama_motor" class="col-4 col-form-label">Nama Motor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="nama_motor" name="nama_motor" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="cc" class="col-4 col-form-label">CC</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="cc" name="cc" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="harga" name="harga" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-right"></i>
          </div>
        </div> 
        <input id="stok" name="stok" 
        value=""
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="merk_id" class="col-4 col-form-label">Merk</label> 
    <div class="col-8">
        <?php 
            $sqlmerk_id = "SELECT * FROM merk";
            $rsmerk_id= $dbh->query($sqlmerk_id);
        ?>
      <select id="merk_id" name="merk_id" class="custom-select">
          <?php 
            foreach($rsmerk_id as $rowmerk_id){
         ?>
            <option value="<?=$rowmerk_id['id']?>"><?=$rowmerk_id['merk']?></option>
         <?php
            }
        ?>
      </select>
    </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
<?php require_once "layouts/footer.php"; ?>