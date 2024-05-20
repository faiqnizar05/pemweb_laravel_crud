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
                    <h4 class="my-4">Daftar Periksa</h4>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Pasien Id</th>
                                <th>Dokter Id</th>
                                <th>Berat</th>
                                <th>Tinggi</th>
                                <th>Tensi</th>
                                <th>Keterangan</th>
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
