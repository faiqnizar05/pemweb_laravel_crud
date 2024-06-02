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
                        <h1>Detail Periksa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Periksa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Periksa</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="pasien_id">Periksa Id:</label>
                        <p>{{ $periksa->pasien_id }}</p>
                    </div>
                    <div class="form-group">
                        <label for="dokter_id">Dokter Id</label>
                        <p>{{ $dokter->dokter_id }}</p>
                    </div>
                    <div class="form-group">
                        <label for="berat">Berat:</label>
                        <p>{{ $berat->berat }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tinggi">Tinggi:</label>
                        <p>{{ $tinggi->tinggi }}</p>
                    </div>
                   
                    <div class="form-group">
                        <label for="tensi">Tensi:</label>
                        <p>{{ $tensi->tensi }}</p>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan:</label>
                        <p>{{ $keterangan->keterangan }}</p>
                    </div>
                    <a href="{{ route('periksas.index') }}" class="btn btn-primary">Back</a>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
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