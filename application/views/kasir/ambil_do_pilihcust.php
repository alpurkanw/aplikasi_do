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



    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url("assets/adminsb/vendor/") ?>select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/adminsb/vendor/") ?>select2/select2-bootstrap4-theme/select2-bootstrap4.min.css">



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



                    <div class="row">
                        <div class="col-8">
                            <!-- DataTales Example -->
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">FORM AMBIL DO
                                            </h6>
                                        </div>
                                        <div class="card-body p-2">


                                            <form id="formDetailHarga" action="<?= base_url('kasir/Cdo/ambil_do_openForm'); ?>" method="post">

                                                <div class="form-group">
                                                    <label for="customer">Pilih Customer</label>
                                                    <select class="form-control" id="customer" name="customer" required>
                                                        <option value="">Pilih Customer</option>
                                                        <?php if (!empty($all_cust)) : ?>
                                                            <?php foreach ($all_cust as $cust) :
                                                                $datacust = $cust["id"] . "|" . $cust["nama"] . "|" . $cust["alamat"] . "|" . $cust["ktp"] . "|" . $cust["notelp"];

                                                            ?>
                                                                <option value="<?= $datacust; ?>"><?= $cust["id"] . "-" . $cust["nama"]; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Tampilkan Data</button>
                                                <a href="#" class="btn btn-secondary">Batal</a>
                                            </form>

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

    <!-- Select2 -->
    <script src="<?= base_url("assets/adminsb/vendor/") ?>select2/js/select2.full.min.js"></script>


    <script>
        $(document).ready(function() {

            $('#customer').select2();

        });
    </script>



</body>

</html>