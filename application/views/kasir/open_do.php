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
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm list_show_barang"> List Barang</a>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn_show_customer"> list Customer</a>
                        </div>
                    </div>

                    <?php
                    //echo $all_cust; 
                    ?>

                    <div class="row">
                        <div class="col-7">
                            <!-- DataTales Example -->
                            <div class="row">
                                <div class="col show_data">
                                    <div class="card shadow mb-4 data_barang">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Daftar Barang </h6>
                                        </div>
                                        <div class="card-body p-2">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover table-bordered" id="table_barang">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nama Barang</th>
                                                            <th>Harga Jual </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        // print_r($trx_mtrls); 
                                                        ?>
                                                        <?php if (!empty($all_barang)) : ?>
                                                            <?php $no = 1; ?>
                                                            <?php $grand_total = 0; ?>
                                                            <?php foreach ($all_barang as $data) : ?>
                                                                <tr class="item_bar"
                                                                    data-idbar="<?= $data["id"]; ?>"
                                                                    data-namabar="<?= $data["namabar"]; ?>"
                                                                    data-hargajual="<?= $data["harga_jual"]; ?>"
                                                                    data-hargabeli="<?= $data["harga_beli"]; ?>">
                                                                    <td><?= $no++; ?></td>
                                                                    <td><?= $data["id"]; ?> - <?= $data["namabar"]; ?></td>
                                                                    <td><?= $data["harga_jual"]; ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php else : ?>
                                                            <tr>
                                                                <td colspan="9" class="text-center text-muted">Tidak ada data Pengeluaran untuk periode ini.</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>



                                                </table>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="card shadow mb-4 data_customer" style="display: none;">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Daftar Customer </h6>
                                        </div>
                                        <div class="card-body p-2">

                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover table-bordered" id="table_customer">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nama Customer</th>
                                                            <th>No telp </th>
                                                            <th>Alamat </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php if (!empty($all_cust)) : ?>
                                                            <?php $no = 1; ?>
                                                            <?php $grand_total = 0; ?>
                                                            <?php foreach ($all_cust as $data) : ?>
                                                                <tr class="item_cust"
                                                                    data-id="<?= $data["id"]; ?>"
                                                                    data-nama="<?= $data["nama"]; ?>"
                                                                    data-alamat="<?= $data["alamat"]; ?>"
                                                                    data-notelp="<?= $data["notelp"]; ?>">
                                                                    <td><?= $no++; ?></td>
                                                                    <td><?= $data["id"]; ?> - <?= $data["nama"]; ?></td>
                                                                    <td><?= $data["notelp"]; ?></td>
                                                                    <td><?= $data["alamat"]; ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php else : ?>
                                                            <tr>
                                                                <td colspan="9" class="text-center text-muted">Tidak ada data Pengeluaran untuk periode ini.</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>



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
                                    <h6 class="m-0 font-weight-bold text-primary">Nota Input DO</h6>
                                </div>
                                <div class="card-body p-2">
                                    <div class="row">
                                        <div class="col-4">Nama Customer : </div>
                                        <div class="col font-weight-bold text-left namacust"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">Alamat : </div>
                                        <div class="col font-weight-bold text-left alamat"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">No telp : </div>
                                        <div class="col font-weight-bold text-left notelp"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">Tanggal Pengambilan : </div>
                                        <div class="col font-weight-bold text-left tanggal_ambil"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">Tanggal Transaksi : </div>
                                        <div class="col font-weight-bold text-left "><?= date('Ymd'); ?></div>
                                    </div>
                                    <hr>
                                    List Barang DO:
                                    <hr class="mt-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered item_pembelian" id="item_pembelian">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Barang</th>
                                                    <th>Qty</th>
                                                    <th>Harga DO </th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                            </tbody>
                                            <tfoot class="table-primary">
                                                <tr>
                                                    <th colspan="3" class="text-end">GRAND TOTAL DO</th>
                                                    <th class="text-end total_nominal_pesan"></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>


                                    <div class="row mb-2">
                                        <div class="col">
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn_submit_DO btn-primary shadow-sm"> Submit</a>
                                            <a href="<?= base_url("kasir/Cdo/input_do"); ?>" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"> Batal</a>
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

    <div class="modal fade" id="modalOpenFormTambahitem" tabindex="-1" role="dialog" aria-labelledby="modalDOBaruLabel" aria-hidden="true">
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
                            <label for="hargajual">Harga Jual Saat ini</label>
                            <input type="text" class="form-control" id="hargajual" name="hargajual" readonly>
                            <input type="hidden" class="form-control" id="hargabeli" name="hargabeli" readonly>
                        </div>

                        <div class="form-group">
                            <label for="qty_minta">Jumlah Qty Permintaan</label>
                            <input type="number" class="form-control" id="qty_minta" name="qty_minta" placeholder="Masukkan jumlah DP">
                        </div>
                        <div class="form-group">
                            <label for="total_nilai">Total Harga</label>
                            <input type="text" class="form-control" id="total_nilai" name="total_nilai" readonly>
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" form="formInputDO" id="btn_pickupItem">Tambahkan Barang</button>
                </div>

            </div>
        </div>
    </div>

    <div class="base_url" data-url="<?= base_url(); ?>"><?= base_url(); ?></div>

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


    <script src="<?= base_url("assets/js/"); ?>openDoNew.js"></script>


    <script>
        $(document).ready(function() {

            // VARIABEL UNTUK MENANDAI APAKAH DATATABLES SUDAH DI INISIALISASI
            var isBarangDataTableInitialized = false;
            var isCustomerDataTableInitialized = false;

            initializeBarangDataTable();

            // --- FUNGSI INISIALISASI DATATABLES BARANG ---
            function initializeBarangDataTable() {
                if (!isBarangDataTableInitialized) {
                    // Inisialisasi DataTables pertama kali
                    $('#table_barang').DataTable({
                        "language": {
                            "sProcessing": "Sedang memproses...",
                            "sLengthMenu": "Tampilkan _MENU_ entri",
                            "sZeroRecords": "Tidak ditemukan data yang sesuai",
                            "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                            "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                            "sInfoFiltered": "(difilter dari _MAX_ total entri)",
                            "sSearch": "Cari:",
                            "oPaginate": {
                                "sFirst": "Awal",
                                "sPrevious": "Sebelumnya",
                                "sNext": "Selanjutnya",
                                "sLast": "Akhir"
                            }
                        },
                        "columnDefs": [{
                            "targets": [0],
                            "orderable": false
                        }]
                    });
                    isBarangDataTableInitialized = true;
                } else {
                    // Jika sudah diinisialisasi, cukup refresh tata letak kolom
                    $('#table_barang').DataTable().columns.adjust().draw();
                }
            }

            // --- FUNGSI INISIALISASI DATATABLES CUSTOMER ---
            function initializeCustomerDataTable() {
                if (!isCustomerDataTableInitialized) {
                    // Inisialisasi DataTables pertama kali
                    $('#table_customer').DataTable({
                        "language": {
                            "sProcessing": "Sedang memproses...",
                            "sLengthMenu": "Tampilkan _MENU_ entri",
                            "sZeroRecords": "Tidak ditemukan data yang sesuai",
                            "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                            "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                            "sInfoFiltered": "(difilter dari _MAX_ total entri)",
                            "sSearch": "Cari:",
                            "oPaginate": {
                                "sFirst": "Awal",
                                "sPrevious": "Sebelumnya",
                                "sNext": "Selanjutnya",
                                "sLast": "Akhir"
                            }
                        },
                        // Customer memiliki 4 kolom. Kolom No (indeks 0) dinonaktifkan sorting-nya.
                        "columnDefs": [{
                            "targets": [0],
                            "orderable": false
                        }]
                    });
                    isCustomerDataTableInitialized = true;
                } else {
                    // Jika sudah diinisialisasi, cukup refresh tata letak kolom
                    $('#table_customer').DataTable().columns.adjust().draw();
                }
            }


            // --- PENANGANAN KLIK TOMBOL BARANG ---
            $('.list_show_barang').on('click', function(e) {
                e.preventDefault();

                // 1. Sembunyikan Customer, lalu Tampilkan Barang (FadeOut/FadeIn)
                $('.data_customer').fadeOut(function() {
                    $('.data_barang').fadeIn(function() {
                        // 2. Refresh DataTables HANYA setelah animasi 'fadeIn' selesai
                        initializeBarangDataTable();
                    });
                });
            });

            // --- PENANGANAN KLIK TOMBOL CUSTOMER ---
            $('.btn_show_customer').on('click', function(e) {
                e.preventDefault();

                // 1. Sembunyikan Barang, lalu Tampilkan Customer (FadeOut/FadeIn)
                $('.data_barang').fadeOut(function() {
                    $('.data_customer').fadeIn(function() {
                        // 2. Refresh DataTables HANYA setelah animasi 'fadeIn' selesai
                        initializeCustomerDataTable();
                    });
                });
            });

            // Opsional: Tampilkan salah satu list (misalnya Barang) saat halaman pertama kali dimuat
            // initializeBarangDataTable(); // Hanya panggil fungsi ini jika Anda tidak menyembunyikannya di Langkah 1

        });
    </script>

</body>

</html>