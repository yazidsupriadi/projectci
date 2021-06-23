<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('include/head'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php $this->load->view('include/sidebar');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
              <?php $this->load->view('include/navbar');?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <a href="<?= base_url()?>index.php/pasien/add" class="btn btn-primary">add</a>
                    
                    <a href="<?= base_url()?>index.php/login/logout" class="btn btn-primary">Logout</a>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>kode</th>
                                <th>nama</th>
                                <th>Jenis Kelamin</th>
                                <th>tempat lahir</th>
                                <th>tanggal lahir</th>
                                <th>email</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
  $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml") or die ("Gagal ambil!");
  echo "<h2>Daftar 15 Gempabumi M 5.0+</h2>";
  $i = 1;
  foreach($data->gempa as $gempaM5) {
    echo "No: " . $i . "<br>";
    echo "Tanggal: " . $gempaM5->Tanggal . "<br>";
    echo "Jam: " .  $gempaM5->Jam . "<br>";
    echo "DateTime: " . $gempaM5->DateTime . "<br>";
    echo "Magnitudo: " . $gempaM5->Magnitude . "<br>";
    echo "Kedalaman: " . $gempaM5->Kedalaman . "<br>";
    echo "Koordinat: " . $gempaM5->point->coordinates . "<br>";
    echo "Lintang: " . $gempaM5->Lintang . "<br>";
    echo "Bujur: " . $gempaM5->Bujur . "<br>";
    echo "Lokasi: " . $gempaM5->Wilayah . "<br>";
    echo "Potensi: " . $gempaM5->Potensi . "<br><br>";
    $i++;
  }
?>                 </tbody>
                    
                    
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('include/script'); ?>

</body>

</html>