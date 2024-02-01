<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Sistem Informasi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css?h=d91acbd26c1a01d6126a31e29eb4da5a">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="/css/styles.min.css?h=bcac6f3b673d0a62aa95448beb4c6b9d">
</head>

<body id="page-top">
    <section class="py-5 mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="display-6 fw-bold mb-4">Kolom Reply Pengaduan</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div>
                        <form class="p-3 p-xl-4" action="/dashboard/reply/{{ $pengaduan->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="name">Nama Pengadu :</label>
                            <input class="shadow form-control mb-3" id="name" name="name" rows="6" readonly value="{{ $pengaduan['name'] }}">
                            <label for="noPelanggan">Nomor Pelanggan Pengadu :</label>
                            <input class="shadow form-control mb-3" id="noPelanggan" name="noPelanggan" rows="6" readonly value="{{ $pengaduan['noPelanggan'] }}">
                            <label for="email">Email Pengadu :</label>
                            <input class="shadow form-control mb-3" id="email" name="email" rows="6" readonly value="{{ $pengaduan['email'] }}">
                            <label for="telepon">Nomor Telepon Pengadu :</label>
                            <input class="shadow form-control mb-3" id="telepon" name="telepon" rows="6" readonly value="{{ $pengaduan['telepon'] }}">
                            <label for="alamat">Alamat Pengadu :</label>
                            <input class="shadow form-control mb-3" id="alamat" name="alamat" rows="6" readonly value="{{ $pengaduan['alamat'] }}">
                            <label for="pengaduan">Isi Pengaduan :</label>
                            <textarea class="shadow form-control mb-3" id="pengaduan" name="pengaduan" rows="6" readonly>{{ $pengaduan['pengaduan'] }}</textarea>
                            <label for="reply">Tanggapan :</label>
                            <textarea class="shadow form-control mb-3" id="reply" name="reply" rows="6"></textarea>
                            <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                            <div>
                                <button class="btn btn-primary shadow d-block w-100" type="submit">Kirim </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Newsletter Subscription Centered -->
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Sistem Informasi 2022</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.min.js?h=bdf36300aae20ed8ebca7e88738d5267"></script>
</body>

</html>