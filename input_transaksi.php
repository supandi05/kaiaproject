<?php include('header.php')  ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-sm-6">
            <!-- general form elements disabled -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" name="autoSumForm" action="simpan_transaksi.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Date:</label>
                    <div class="input-group date col-sm-10" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="date">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pembayaran</label>
                  <select class="form-control select2bs4 col-sm-10" style="width: 82%;" name="pembayaran">
                    <?php 
                    include "koneksi.php";
                    $query = mysqli_query($con, "select * FROM pembayaran");
                    while($data = mysqli_fetch_array($query)){
                    ?>
                   <option><?php echo $data['jenis_pembayaran']?></option>
                    <?php } ?>
                  </select>
                </div>
          
                <!-- /.form-group -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor ID</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nomorid" id="inputEmail3" placeholder="Nomor ID">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="produk" id="inputPassword3" placeholder="Produk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga Beli</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="hargabeli"  placeholder="Harga Beli" onfocus="startCalc();" onBlur="stopCalc();">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga Jual</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="hargajual" placeholder="Harga Jual" onfocus="startCalc();" onBlur="stopCalc();">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Profit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="profit" placeholder="Profit" value="0" readonly>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>






<?php include('footer.php')  ?>;