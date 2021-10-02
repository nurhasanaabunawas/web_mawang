@extends('admin.layout')

@push('css')
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@section('content')

<!-- mulai disini content nya -->

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>




    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <div class="bs-example">
                    <h3 class="card-title">Data Penduduk</h3>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#store1">Tambah</button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Status Mutasi</th>
                        <th>Bulan</th>
                        <th>Nama Lingkungan</th>
                        <th>Jenis Kelamin</th>
                        <th>NIK</th>
                        <th>KK</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Nomor Akta Kelahiran</th>
                        <th>Usia</th>
                        <th>Kab/Kota Tujuan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Status Mutasi</th>
                        <th>Bulan</th>
                        <th>Nama Lingkungan</th>
                        <th>Jenis Kelamin</th>
                        <th>NIK</th>
                        <th>KK</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Nomor Akta Kelahiran</th>
                        <th>Usia</th>
                        <th>Kab/Kota Tujuan</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>D=
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<!-- batas nya content -->

<div class="modal fade" id="store1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Penduduk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ url('admin/wilayah_administrasi/') }}" method="POST" id="quickForm" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">          
            <div class="form-group">
              <label >Status Mutasi</label>
              <input type="name" id="series_name_store" name="nama_wilayah" class="form-control" placeholder="Status Mutasi" >
            </div>
            <div class="form-group">
              <label >Bulan</label>
              <input type="name" id="series_name_store" name="nama_ketua_rw" class="form-control" placeholder="Bulan" >
            </div><div class="form-group">
              <label >Nama Lingkungan</label>
              <input type="name" id="series_name_store" name="nama_ketua_rt" class="form-control" placeholder="Nama Lingkungan" >
            </div><div class="form-group">
              <label >Jenis Kelamin</label>
              <input type="name" id="series_name_store" name="rw" class="form-control" placeholder="Jenis Kelamin" >
            </div><div class="form-group">
              <label >NIK</label>
              <input type="name" id="series_name_store" name="rt" class="form-control" placeholder="NIK" >
          </div>
          <div class="form-group">
              <label >KK</label>
              <input type="name" id="series_name_store" name="rt" class="form-control" placeholder="KK" >
          </div><div class="form-group">
              <label >Nama Ayah</label>
              <input type="name" id="series_name_store" name="rt" class="form-control" placeholder="Nama Ayah" >
          </div><div class="form-group">
              <label >Nama Ibu</label>
              <input type="name" id="series_name_store" name="rt" class="form-control" placeholder="Nama Ibu" >
          </div><div class="form-group">
              <label >Nomor Akta Kelahiran</label>
              <input type="name" id="series_name_store" name="rt" class="form-control" placeholder="Nomor Akta Kelahiran" >
          </div><div class="form-group">
              <label >Usia</label>
              <input type="name" id="series_name_store" name="rt" class="form-control" placeholder="Usia" >
          </div><div class="form-group">
              <label >Kab/Kota Tujuan</label>
              <input type="name" id="series_name_store" name="rt" class="form-control" placeholder="Kab/Kota Tujuan" >
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        
      </form>
          
      </div>
      </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

@stop
@push('javascript')
<!-- DataTables  & Plugins -->
<script src="{{ URL::asset('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

  <!-- Toastr  & Plugins -->
  <script src="{{ URL::asset('assets')}}/plugins/toastr/toastr.min.js"></script>

  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush
