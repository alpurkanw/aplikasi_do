<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url("assets/adminsb/"); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url("assets/adminsb/"); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url("assets/adminsb/"); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('kasir/01_sidebar'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('kasir/02_topbar');                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-2">

                    <div class="row mb-2">
                        <div class="col">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Cari Barang</a>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Cari Customer</a>
                        </div>
                    </div>

                    <?php
                    //echo $all_cust; 
                    ?>

                    <div class="row">
                        <div class="col-8">
                            <!-- DataTales Example -->
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Daftar Barang </h6>
                                        </div>
                                        <div class="card-body p-2">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover table-bordered" id="laporanPenjualanKeluar">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nama Barang</th>
                                                            <th>Harga Jual </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>semen</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>semen</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>semen</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>semen</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>semen</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>semen</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Nota Input DO</h6>
                                </div>
                                <div class="card-body p-2">
                                    Nama Customer : Alpurkan <br>
                                    Alamat : depok <br>
                                    No Telp : <br>
                                    Tanggal Pengambilan : 20261025 <br>
                                    Tanggal ; 20251025 <br><br>
                                    List Barang DO:
                                    <hr class="mt-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered" id="laporanPenjualanKeluar">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty</th>
                                                    <th>Harga DO </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>semen</td>
                                                    <td>100</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>semen</td>
                                                    <td>100</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>semen</td>
                                                    <td>100</td>
                                                    <td>$320,800</td>
                                                </tr>
                                            </tbody>
                                            <tfoot class="table-primary">
                                                <tr>
                                                    <th colspan="3" class="text-end">GRAND TOTAL DO</th>
                                                    <th class="text-end">Rp 300,000,000</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>


                                    <div class="row mb-2">
                                        <div class="col">
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Submit</a>
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"> Batal</a>
                                        </div>
                                    </div>




                                </div>
                            </div>



                        </div>
                    </div>




                </div>
                <!-- /.container-fluid p-2 -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->




    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url("assets/adminsb/"); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url("assets/adminsb/"); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url("assets/adminsb/"); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url("assets/adminsb/"); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url("assets/adminsb/"); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url("assets/adminsb/"); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url("assets/adminsb/"); ?>js/demo/datatables-demo.js"></script>


    <script src="<?= base_url("assets/js/"); ?>openDo.js"></script>
    <script>
        const ALL_CUST = '<?php echo $all_cust; ?>';
        const ALL_BAR = '<?php echo $all_barang; ?>';
    </script>

</body>

</html>