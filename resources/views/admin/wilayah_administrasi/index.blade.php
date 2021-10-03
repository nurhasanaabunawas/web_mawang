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
                    <h3 class="card-title">Data Wilayah Administrasi</h3>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#store">Tambah</button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Wilayah</th>
                        <th>Nama Ketua RW</th>
                        <th>Nama Ketua RT</th>
                        <th>RW</th>
                        <th>RT</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($wilayah_admin as $data)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->nama_wilayah }}</td>
                          <td>{{ $data->nama_ketua_rw }}</td>
                          <td>{{ $data->nama_ketua_rt }}</td>
                          <td>{{ $data->rw }}</td>
                          <td>{{ $data->rt }}</td>
                          <td>

                            <button data-toggle="modal" data-target="#edit{{ $data->id }}" type="submit" class="btn btn-block btn-warning btn-sm ">Edit</button>
                            <button data-toggle="modal" data-target="#destroy{{ $data->id }}"  type="submit" class="btn btn-block btn-danger btn-sm ">Hapus</button>


                          </td>
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
    </div>D=
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<!-- batas nya content -->

<!-- /.modal -->

 <div class="modal fade" id="store" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Data Wilayah Administrasi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ url('admin/wilayah_administrasi/') }}" method="POST" id="quickForm" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">          
            <div class="form-group">
              <label >Nama Wilayah</label>
              <input type="name" id="series_name_store" name="nama_wilayah" class="form-control" placeholder="Nama Wilayah" >
            </div>
            <div class="form-group">
              <label >Nama Ketua RW</label>
              <input type="name" id="series_name_store" name="nama_ketua_rw" class="form-control" placeholder="Nama Ketua RW" >
            </div><div class="form-group">
              <label >Nama Ketua RT</label>
              <input type="name" id="series_name_store" name="nama_ketua_rt" class="form-control" placeholder="Nama Ketua RT" >
            </div><div class="form-group">
              <label >RW</label>
              <input type="name" id="series_name_store" name="rw" class="form-control" placeholder="RW" >
            </div><div class="form-group">
              <label >RT</label>
              <input type="name" id="series_name_store" name="rt" class="form-control" placeholder="RT" >
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

    
    <!-- Modal -->
    @foreach($wilayah_admin as $data)
    <div class="modal fade" id="destroy{{ $data->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
      </div>
          <div class="modal-body">
           Apakah anda yakin menghapus data ini ?
          </div>
          <form action="{{ route('wilayah_administrasi.destroy', $data->id) }}" method="POST">
          @csrf
          @method('DELETE')
            <div class="modal-footer d-flex justify-content-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Ya</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach

     <!-- Modal -->
     @foreach($wilayah_admin as $data)
     <div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>

      <form action="{{ route('wilayah_administrasi.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="modal-body">          
            <div class="form-group">
              <label >Nama Wilayah</label>
              <input type="name" id="nama_wilayah{{ $data->id }}" name="nama_wilayah" value="{{ $data->nama_wilayah }}" class="form-control" placeholder="Nama Wilayah" >
            </div>
            <div class="form-group">
              <label >Nama Ketua RW</label>
              <input type="name" id="nama_ketua_rw{{ $data->id }}" value="{{ $data->nama_ketua_rw }}" name="nama_ketua_rw" class="form-control" placeholder="Nama Ketua RW" >
            </div><div class="form-group">
              <label >Nama Ketua RT</label>
              <input type="name" id="nama_ketua_rt{{ $data->id }}" value="{{ $data->nama_ketua_rt }}" name="nama_ketua_rt" class="form-control" placeholder="Nama Ketua RT" >
            </div><div class="form-group">
              <label >RW</label>
              <input type="name" id="rw{{ $data->id }}" name="rw" value="{{ $data->rw }}" class="form-control" placeholder="RW" >
            </div><div class="form-group">
              <label >RT</label>
              <input type="name" id="rt{{ $data->id }}" name="rt" value="{{ $data->rt }}" class="form-control" placeholder="RT" >
          </div> 

          <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div> 
          </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
@stop
@push('javascript')

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
  <script src="{{URL::asset('assets/plugins/toastr/toastr.min.js')}}"></script>

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
</script>


@endpush
