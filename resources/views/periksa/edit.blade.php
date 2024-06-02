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
                        <h1>Edit Periksa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Periksa</li>
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
                    <h3 class="card-title">Edit Periksa</h3>

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
                    <form action="{{ route('periksas.update', $periksa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="pasien_id">Pasien Id:</label>
                            <input type="text" name="pasien_id" value="{{ $periksa->pasien_id }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="dokter_id">Dokter Id:</label>
                            <input type="text" name="dokter_id" value="{{ $periksa->dokter_id }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="berat">Berat:</label>
                            <input type="text" name="berat" value="{{ $periksa->berat }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tinggi">Tinggi :</label>
                            <input type="text" name="tinggi" value="{{ $periksa->tinggi }}"
                                class="form-control">
                        </div>

                       

                        <div class="form-group">
                            <label for="tensi">Tensi:</label>
                            <input type="tensi" name="tensi" value="{{ $periksa->tensi }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <textarea name="keterangan" class="form-control">{{ $periksa->keterangan }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

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