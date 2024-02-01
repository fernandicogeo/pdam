@extends('partials.main')

@section('container')
<div style="background-color: white">
  <h1 style=" 
          font-family: Poppins;
          font-style: normal;
          font-size: 44px;
          text-align:center;
          margin-top:10%;
          " > PENGADUAN ONLINE PDAM TIRTA MUSI</h1>
  <!--form-->
  <form action="/pengaduan" method="post">
    @csrf
    <div style=""class="row">
        <div style="margin-left:8%;"class="col lg-4">
            <div class="mb-3">
                <label for="form" class="form-label">Nama*</label>
                <input type="text" name="name" class="form-control" id="form" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email*</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="form" class="form-label">Telepon*</label>
                <input type="text" name="telepon" class="form-control" id="form" aria-describedby="" required>
            </div>
        </div>
        <div style="margin-right:8%"class="col lg-4">
            <div class="mb-3">
                <label for="form" class="form-label">No Pelanggan*</label>
                <input type="text" name="noPelanggan" class="form-control" id="form" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <label for="form" class="form-label">Alamat*</label>
                <input type="text" name="alamat" class="form-control" id="form" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <label for="form" class="form-label">Pengaduan*</label>
                <input type="text" name="pengaduan" class="form-control" id="form" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    </form>

  <div class="content-wrapper mt-5">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Pengaduan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Pengaduan</th>
                                <th>Tanggapan</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($pengaduans as $pengaduan)
                                <tr>
                                    <td>{{ $pengaduan->name }}</td>
                                    <td>{{ $pengaduan->pengaduan }}</td>
                                    <td>
                                        @if ($pengaduan->reply == "")
                                            Pengaduan belum ditanggapi admin. Silahkan menunggu.
                                        @else
                                        {{ $pengaduan->reply }}
                                        @endif
                                    </td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.js"></script>
    <script src="js/sb-admin-charts.js"></script>
  </div>
</div>
@endsection