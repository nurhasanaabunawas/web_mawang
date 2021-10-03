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
                    <h3 class="card-title">Data Laporan Bulanan</h3>
                   
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Bulan</th>
                        <th>Perincian</th>
                        <th>Status Warga</th>
                 
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($penduduk as $data)
                        <tr>
                          <td>{{ $loop->iteration }}</td>  
                          <td>{{ $data->bulan }}</td>
                          <td>{{ $data->perincian }}</td>
                          <td>{{ $data->status}}</td>
                         
                        </tr>
                      @endforeach
                    </tbody>
                    
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
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<!-- batas nya content -->


<div class="modal fade" id="store3">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Laporan Bulanan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ url('admin/wilayah_administrasi/') }}" method="POST" id="quickForm" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">          
            <div class="form-group">
              <label >Bulan</label>
              <input type="name" id="series_name_store" name="nama_wilayah" class="form-control" placeholder="Bulan" >
            </div>
            <div class="form-group">
              <label >Perincian</label>
              <input type="name" id="series_name_store" name="nama_ketua_rw" class="form-control" placeholder="Perincian" >
            <div class="form-group">
              <label >Status Warga</label>
              <input type="name" id="series_name_store" name="nama_ketua_rt" class="form-control" placeholder="Status Warga" > 
              </div>
            
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
          </div></div></div></div></div>
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
  <script src="{{ URL::asset('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/jszip/jszip.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{ URL::asset('assets')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- Toastr  & Plugins -->
  <script src="{{ URL::asset('assets')}}/plugins/toastr/toastr.min.js"></script>

  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
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