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
                        <h1>Detail Pasien</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Pasien</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Detail Pasien</h3>

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
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode"><strong>Kode:</strong></label>
                                <p>{{ $pasien->kode }}</p>
                            </div>
                            <div class="form-group">
                                <label for="nama"><strong>Nama:</strong></label>
                                <p>{{ $pasien->nama }}</p>
                            </div>
                            <div class="form-group">
                                <label for="tmp_lahir"><strong>Tempat Lahir:</strong></label>
                                <p>{{ $pasien->tmp_lahir }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_lahir"><strong>Tanggal Lahir:</strong></label>
                                <p>{{ $pasien->tgl_lahir }}</p>
                            </div>
                            <div class="form-group">
                                <label for="gender"><strong>Gender:</strong></label>
                                <p>{{ $pasien->gender }}</p>
                            </div>
                            <div class="form-group">
                                <label for="email"><strong>Email:</strong></label>
                                <p>{{ $pasien->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat"><strong>Alamat:</strong></label>
                                <p>{{ $pasien->alamat }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('pasiens.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <small class="text-muted">© {{ date('Y') }} Your Company</small>
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

<style>
    .form-group label {
        font-weight: bold;
        color: #343a40;
    }

    .form-group p {
        border-bottom: 1px solid #e9ecef;
        padding-bottom: 5px;
        margin-bottom: 10px;
        color: #495057;
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-tool {
        color: #ffffff;
    }
</style>
