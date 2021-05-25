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
           
                    <form action="<?=base_url();?>index.php/pasien/update" class="form-group" method="post">
                    
				<input type="hidden" name="id" id="id" value="<?php echo $pasien->id; ?>"/>
				<input type="hidden" name="kode" id="kode" value="<?php echo $pasien->kode; ?>"/>
                        <label for="">Nama</label>
                        <input type="text" name="nama" placeholder="masukan nama pasien" value="<?= $pasien->nama?>" class="form-control">
                        
                        <select name="gender" id="" class="form-control mt-3 mb-3">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        
                        <label for="">Tempat Lahir</label>
                        <input type="text" name="tmp_lahir" placeholder="masukan nama pasien" value="<?= $pasien->tmp_lahir?>"class="form-control">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" placeholder="masukan nama pasien" class="form-control" value="<?= $pasien->tgl_lahir?>">
                        
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="masukan email pasien" class="form-control" value="<?= $pasien->email?>">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
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