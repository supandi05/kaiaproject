<?php include('header.php') ?>;

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <?php 
            include "koneksi.php";
            $query = mysqli_query($con, "select SUM(harga_jual) AS total_harga_jual FROM transaksi");
            while($data = mysqli_fetch_array($query)){
            ?>
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Rp. <?php echo number_format($data['total_harga_jual'], 0, ',', '.')?></h3>

                <p>Omset</p>
                <?php } ?>
              </div>

              <div class="icon">
                <i class="fa fa-cash-register"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php 
            include "koneksi.php";
            $query = mysqli_query($con, "select SUM(profit) AS total_profit FROM transaksi");
            while($data = mysqli_fetch_array($query)){
            ?>
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Rp. <?php echo number_format($data['total_profit'], 0, ',', '.')?></h3>

                <p>Profit</p>
                <?php } ?>
              </div>
              <div class="icon">
                <i class="fa fa-wallet"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php 
            include "koneksi.php";
            $query = mysqli_query($con, "select SUM(profit * 0.005) AS total_pajak FROM transaksi");
            while($data = mysqli_fetch_array($query)){
            ?>
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Rp. <?php echo number_format($data['total_pajak'], 0, ',', '.')?></h3>
                <p>Pajak Penghasilan</p>
                <?php } ?>
              </div>
              <div class="icon">
                <i class="fa fa-balance-scale-left"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Rp. 65</h3>

                <p>Pengeluaran</p>
              </div>
              <div class="icon">
                <i class="fa fa-receipt"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->


       <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tanggal Transaksi</th>
                    <th>Jenis Pembayaran</th>
                    <th>Nomor ID</th>
                    <th>Produk</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Profit</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                     include "koneksi.php";
                    $query = mysqli_query($con, "select * from transaksi");
                     while($data = mysqli_fetch_array($query)){
                ?>
                  <tr>
                    <td><?php echo $data['tanggal_transaksi']?></td>
                    <td><?php echo $data['jenis_pembayaran']?></td>
                    <td><?php echo $data['nomor_id']?></td>
                    <td><?php echo $data['produk']?></td>
                    <td>Rp. <?php echo number_format($data['harga_beli'], 0, ',', '.')?></td>
                    <td>Rp. <?php echo number_format($data['harga_jual'], 0, ',', '.')?></td>
                    <td>Rp. <?php echo number_format($data['profit'], 0, ',', '.')?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php include('footer.php')  ?>;