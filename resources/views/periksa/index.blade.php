@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard Periksa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard Periksa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Daftar Pemeriksaan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool text-white" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool text-white" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                <h1 class="my-4">Daftar Periksa</h1>
                    <a href="{{ route('periksas.create') }}" class="btn btn-primary">Tambah Periksa</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Create Id</th>
                                <th>Dokter Id</th>
                                <th>Berat</th>
                                <th>Tinggi</th>
                                <th>Tensi</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach ($list_periksa as $periksa)
                                <tr>
                                    <td>{{ $periksa->id }}</td>
                                    <td>{{ $periksa->pasien_id }}</td>
                                    <td>{{ $periksa->dokter_id }}</td>
                                    <td>{{ $periksa->berat }}</td>
                                    <td>{{ $periksa->tinggi }}</td>
                                    <td>{{ $periksa->tensi }}</td>
                                    <td>{{ $periksa->keterangan }}</td>
                                    <td>
    <a href="{{ route('periksas.show', $periksa->id) }}" class="btn btn-info btn-sm">Read</a>
    <a href="{{ route('periksas.edit', $periksa->id) }}" class="btn btn-warning btn-sm">Update</a>
    <form action="{{ route('periksas.destroy', $periksa->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this periksa?')">Delete</button>
    </form>
</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer bg-primary text-white">
                    <p class="mb-0">Footer Information</p>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
