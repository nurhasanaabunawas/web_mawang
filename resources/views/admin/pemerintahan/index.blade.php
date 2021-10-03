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
                    <h3 class="card-title">Data Pemerintahan Kelurahan Mawang</h3>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#store">Tambah</button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jabatan</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($pemerintah as $data)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->nama }}</td>
                          <td>{{ $data->nip }}</td>
                          <td>{{ $data->jabatan }}</td>
                          <td>{{ $data->jenis_kelamin }}</td>
                          <td>{{ $data->alamat }}</td>
                          <td>
                            <button data-toggle="modal" data-target="#edit{{ $data->id }}" type="submit" class="btn btn-block btn-warning btn-sm">Edit</button>
                            <button data-toggle="modal" data-target="#destroy{{ $data->id }}"  type="submit" class="btn btn-block btn-danger btn-sm">Hapus</button>
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


<div class="modal fade" id="store" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Pemerintahan Kelurahan Mawang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('pemerintahan.store') }}" method="POST" id="quickForm" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">          
            <div class="form-group">
              <label >Nama</label>
              <input type="name" id="nama" name="nama" class="form-control" placeholder="Nama" >
            </div>
            <div class="form-group">
              <label >NIP</label>
              <input type="name" id="nip" name="nip" class="form-control" placeholder="NIP" >
              </div>
            <div class="form-group">
              <label >Jabatan</label>
              <input type="name" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan" >
              </div>
              <div class="form-group">
              <label >Jenis Kelamin</label>
              <input type="name" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" >
              </div>
            <div class="form-group">
              <label >Alamat</label>
              <input type="name" id="alamat" name="alamat" class="form-control" placeholder="Alamat" >
              </div>
            
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

 <!-- Modal destroy -->
    @foreach($pemerintah as $data)
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
          <form action="{{ route('pemerintahan.destroy', $data->id) }}" method="POST">
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


    <!-- Modal Update-->
     @foreach($pemerintah as $data)
     <div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>

      <form action="{{ route('pemerintahan.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="modal-body">          
            <div class="form-group">
              <label >Nama</label>
              <input type="name" id="nama{{ $data->id }}" name="nama" value="{{ $data->nama }}" class="form-control" placeholder="Nama " >
            </div>
            <div class="form-group">
              <label >NIP</label>
              <input type="name" id="nip{{ $data->id }}" value="{{ $data->nip }}" name="nip" class="form-control" placeholder="Nama Ketua RW" >
            </div><div class="form-group">
              <label >Jabatan</label>
              <input type="name" id="jabatan{{ $data->id }}" value="{{ $data->jabatan }}" name="jabatan" class="form-control" placeholder="Jabatan" >
            </div><div class="form-group">
              <label >Jenis Kelamin</label>
              <input type="name" id="jenis_kelamin{{ $data->id }}" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" class="form-control" placeholder="Jenis Kelamin" >
            </div><div class="form-group">
              <label >Alamat</label>
              <input type="name" id="alamat{{ $data->id }}" name="alamat" value="{{ $data->alamat }}" class="form-control" placeholder="Jenis Kelamin" >
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


@endpush
