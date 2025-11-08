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
                        <div class="col-auto">



                            <div class="card shadow-sm mb-2">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-2">Laporan Pembukaan DO</h5>
                                    <p class="card-text mb-2">Menampilkan rekapitulasi transaksi Pembukaan DO per periode </p>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('kasir/Clap/trx_open_DO_view'); ?>" method="post" class="mb-4">
                                        <div class="row g-3 align-items-end">
                                            <div class="col-md-4 col-lg">
                                                <label for="tanggalMulai" class="form-label">Tanggal Mulai</label>
                                                <input type="date" class="form-control" id="tgl_awal" name="tgl_awal"
                                                    value="<?= isset($start_date) ? $start_date : date('Y-m-d'); ?>">
                                            </div>

                                            <div class="col-md-4 col-lg">
                                                <label for="tanggalSelesai" class="form-label">Tanggal Selesai</label>
                                                <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir"
                                                    value="<?= isset($end_date) ? $end_date : date('Y-m-d'); ?>">
                                            </div>

                                            <div class="col-md-12 col-lg d-flex justify-content-lg-end mt-3 mt-lg-0">
                                                <button type="submit" class="btn btn-primary me-2">
                                                    <i class="bi bi-funnel me-2"></i> Tampilkan Data
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
                            <input type="hiddenus" class="form-control" id="hargabeli" name="hargabeli" readonly>
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
                $('.data_customer').fadeOut(200, function() {
                    $('.data_barang').fadeIn(200, function() {
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