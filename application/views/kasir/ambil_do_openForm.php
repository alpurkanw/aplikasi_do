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


                    <div class="row">
                        <div class="col-7">
                            <!-- DataTales Example -->
                            <div class="row">
                                <div class="col">


                                    <!-- $cust["id"] . "|" . $cust["nama"] . "|" . $cust["alamat"] . "|" . $cust["ktp"] . "|" . $cust["notelp"]; -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Detail DO customer</h6>
                                        </div>
                                        <div class="card-body p-2">
                                            Nama Customer : <?= $cust[0] . "-" . $cust[1]; ?> <br>
                                            Alamat : <?= $cust[2]; ?> <br>
                                            No Telp : <?= $cust[4]; ?> <br>
                                            <br>
                                            List Barang DO:
                                            <hr class="mt-0">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover table-sm table-bordered" id="listDO">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nota DO / Tgl Input</th>
                                                            <th>Barang </th>
                                                            <th>Qty </th>
                                                            <th>Hrg </th>
                                                            <th> </th>
                                                        </tr>
                                                    </thead>


                                                    <tbody class="text-sm">
                                                        <?php if (!empty($DOlist)) : ?>
                                                            <?php $no = 1; ?>
                                                            <?php foreach ($DOlist as $data) : ?>
                                                                <tr>
                                                                    <td><?= $no++; ?></td>
                                                                    <td><?= $data["notaopen"]; ?> / <?= $data["tglinp"]; ?></td>
                                                                    <td><?= $data["idbar"] . "-" . $data["namabar"]; ?></td>
                                                                    <td><?= $data["jumbar"]; ?></td>
                                                                    <td><?= $data["harga_jual"]; ?></td>
                                                                    <td>
                                                                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn_openPickupBar"
                                                                            data-notaopen="<?= $data["notaopen"]; ?>"
                                                                            data-idbar="<?= $data["idbar"]; ?>"
                                                                            data-namabar="<?= $data["namabar"]; ?>"
                                                                            data-qty="<?= $data["jumbar"]; ?>"
                                                                            data-harga_jual="<?= $data["harga_jual"]; ?>"> Ambil DO</a>
                                                                    </td>

                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php else : ?>
                                                            <tr>
                                                                <td colspan="9" class="text-center text-muted"><?= $cust[1]; ?> Belum Mempunyai DO</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>


                                                    <!-- 
                                                    <tfoot class="table-primary">
                                                        <tr>
                                                            <th colspan="4" class="text-end">GRAND TOTAL DO</th>
                                                            <th class="text-end">Rp 300,000,000</th>
                                                            <th class="text-end"></th>
                                                        </tr>
                                                    </tfoot> -->


                                                </table>
                                            </div>

                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                        <div class="col-5">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Barang Pengambilan DO </h6>
                                </div>
                                <div class="card-body p-2">

                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered" id="list_itemAmbilDO">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Nota Open</th>
                                                    <th>Barang</th>
                                                    <th>Qty Ambil </th>
                                                    <th>Harga</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                            </tbody>


                                        </table>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col">
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary btn_inputAmbilDO shadow-sm"> Submit Pengambilan DO</a>
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




    <div class="modal fade" id="mdl_formAmbilBar" tabindex="-1" role="dialog" aria-labelledby="modalDOBaruLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalDOBaruLabel">Form Ambil Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="formInputDO">


                        <input type="hidden" class="form-control" id="idcust" name="idcust" value="<?= $cust[0]; ?>" readonly>
                        <input type="hidden" class="form-control" id="namacust" name="namacust" value="<?= $cust[1]; ?>" readonly>
                        <input type="hidden" class="form-control" id="notaopen" name="notaopen" readonly>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="idbar">Kode Barang</label>
                                    <input type="text" class="form-control" id="idbar" name="idbar" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="namabar">Nama Barang</label>
                                    <input type="text" class="form-control" id="namabar" name="namabar" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hargajual">Harga Jual</label>
                            <input type="text" class="form-control" id="hargajual" name="hargajual" readonly>
                            <input type="hidden" class="form-control" id="hargabeli" name="hargabeli" readonly>
                        </div>

                        <!-- <div class="form-group">
                            <label for="qty_minta">Jumlah Qty Permintaan</label>
                            <input type="number" class="form-control" id="qty_minta" name="qty_minta" placeholder="Masukkan jumlah DP">
                        </div> -->

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="idbar">Jumlah Open</label>
                                    <input type="text" class="form-control" id="jum_open" name="jum_open" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="namabar">Jumlah Ambil</label>
                                    <input type="text" class="form-control" id="jum_ambil" name="jum_ambil">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="namabar">Jumlah Sisa</label>
                                    <input type="text" class="form-control" id="jum_sisa" name="jum_sisa" readonly>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="form-group">
                            <label for="total_nilai">Total Harga</label>
                            <input type="text" class="form-control" id="total_nilai" name="total_nilai" readonly>
                        </div> -->

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="formInputDO" id="btn_pickupItem">Tambahkan Barang</button>
                </div>

            </div>
        </div>
    </div>


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

    <script src="<?= base_url("assets/js/"); ?>ambilDO.js"></script>

    <script>
        $(document).ready(function() {
            $('#listDO').DataTable();

        })
    </script>
</body>

</html>