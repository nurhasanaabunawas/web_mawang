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
                        <th>Perincian</th>
                        <th>Status Warga</th>
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
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($penduduk as $data)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->nama }}</td>
                          <td>{{ $data->perincian }}</td>
                          <td>{{ $data->status }}</td>
                          <td>{{ $data->bulan }}</td>
                          <td>{{ $data->nama_lingkungan }}</td>
                          <td>{{ $data->jenis_kelamin }}</td>
                          <td>{{ $data->nik }}</td>
                          <td>{{ $data->kk }}</td>
                          <td>{{ $data->nama_ayah }}</td>
                          <td>{{ $data->nama_ibu }}</td>
                          <td>{{ $data->no_akta_kelahiran }}</td>
                          <td>{{ $data->usia }}</td>
                          <td>{{ $data->kota }}</td>
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
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<!-- batas nya content -->

<div class="modal fade" id="store" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Penduduk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('penduduk.store') }}" method="POST" id="quickForm" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">  
        <div class="form-group">
              <label >Nama</label>
              <input type="name" id="nama" name="nama" class="form-control" placeholder="Nama" >
            </div>        
            <div class="form-group">
              <label >Perincian</label>
              <input type="name" id="perincian" name="perincian" class="form-control" placeholder="Perincian" >
            </div>
            <div class="form-group">
              <label >Status Warga</label>
              <input type="name" id="status" name="status" class="form-control" placeholder="Status Warga" >
            </div>
            <div class="form-group">
              <label >Bulan</label>
              <input type="name" id="bulan" name="bulan" class="form-control" placeholder="Bulan" >
            </div><div class="form-group">
              <label >Nama Lingkungan</label>
              <input type="name" id="nama_lingkungan" name="nama_lingkungan" class="form-control" placeholder="Nama Lingkungan" >
            </div><div class="form-group">
              <label >Jenis Kelamin</label>
              <input type="name" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" >
            </div><div class="form-group">
              <label >NIK</label>
              <input type="name" id="nik" name="nik" class="form-control" placeholder="NIK" >
          </div>
          <div class="form-group">
              <label >KK</label>
              <input type="name" id="kk" name="kk" class="form-control" placeholder="KK" >
          </div><div class="form-group">
              <label >Nama Ayah</label>
              <input type="name" id="nama_ayah" name="nama_ayah" class="form-control" placeholder="Nama Ayah" >
          </div><div class="form-group">
              <label >Nama Ibu</label>
              <input type="name" id="nama_ibu" name="nama_ibu" class="form-control" placeholder="Nama Ibu" >
          </div><div class="form-group">
              <label >Nomor Akta Kelahiran</label>
              <input type="name" id="no_akta_kelahiran" name="no_akta_kelahiran" class="form-control" placeholder="Nomor Akta Kelahiran" >
          </div><div class="form-group">
              <label >Usia</label>
              <input type="name" id="usia" name="usia" class="form-control" placeholder="Usia" >
          </div><div class="form-group">
              <label >Kab/Kota Tujuan</label>
              <input type="name" id="kota" name="kota" class="form-control" placeholder="Kab/Kota Tujuan" >
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

      <!-- Modal destroy -->
    @foreach($penduduk as $data)
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
          <form action="{{ route('penduduk.destroy', $data->id) }}" method="POST">
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
     @foreach($penduduk as $data)
     <div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>

      <form action="{{ route('penduduk.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="modal-body">
            <div class="form-group">
              <label >Nama</label>
              <input type="name" id="nama{{ $data->id }}" name="nama" value="{{ $data->nama }}" class="form-control" placeholder="Status Mutasi" >
            </div>          
            <div class="form-group">
              <label >Perincian</label>
              <input type="name" id="Perincian{{ $data->id }}" name="perincian" value="{{ $data->perincian }}" class="form-control" placeholder="Perincian" >
            </div>
            <div class="form-group">
              <label >Status Warga</label>
              <input type="name" id="status{{ $data->id }}" name="status" value="{{ $data->status }}" class="form-control" placeholder="Status Mutasi" >
            </div>
            <div class="form-group">
              <label >Bulan</label>
              <input type="name" id="bulan{{ $data->id }}" name="bulan" value="{{ $data->bulan }}" class="form-control" placeholder="Bulan" >
            </div><div class="form-group">
              <label >Nama Lingkungan</label>
              <input type="name" id="nama_lingkungan{{ $data->id }}" name="nama_lingkungan" value="{{ $data->nama_lingkungan }}" class="form-control" placeholder="Nama Lingkungan" >
            </div><div class="form-group">
              <label >Jenis Kelamin</label>
              <input type="name" id="jenis_kelamin{{ $data->id }}" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" class="form-control" placeholder="Jenis Kelamin" >
            </div><div class="form-group">
              <label >NIK</label>
              <input type="name" id="nik{{ $data->id }}" name="nik" value="{{ $data->nik }}" class="form-control" placeholder="NIK" >
          </div>
          <div class="form-group">
              <label >KK</label>
              <input type="name" id="kk{{ $data->id }}" name="kk" value="{{ $data->kk }}" class="form-control" placeholder="KK" >
          </div><div class="form-group">
              <label >Nama Ayah</label>
              <input type="name" id="nama_ayah{{ $data->id }}" name="nama_ayah" value="{{ $data->nama_ayah }}" class="form-control" placeholder="Nama Ayah" >
          </div><div class="form-group">
              <label >Nama Ibu</label>
              <input type="name" id="nama_ibu{{ $data->id }}" name="nama_ibu" value="{{ $data->nama_ibu }}" class="form-control" placeholder="Nama Ibu" >
          </div><div class="form-group">
              <label >Nomor Akta Kelahiran</label>
              <input type="name" id="no_akta_kelahiran{{ $data->id }}" name="no_akta_kelahiran" value="{{ $data->no_akta_kelahiran }}" class="form-control" placeholder="Nomor Akta Kelahiran" >
          </div><div class="form-group">
              <label >Usia</label>
              <input type="name" id="usia{{ $data->id }}" name="usia" value="{{ $data->usia }}" class="form-control" placeholder="Usia" >
          </div><div class="form-group">
              <label >Kab/Kota Tujuan</label>
              <input type="name" id="kota{{ $data->id }}" name="kota" value="{{ $data->kota }}" class="form-control" placeholder="Kab/Kota Tujuan" >
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
