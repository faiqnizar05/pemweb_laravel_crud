@include('pegawai.header')
@include('pegawai.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard Pegawai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Admin Pegawai Card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">CEO IQSXOO.</h3>
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
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/nizar.jpg') }}" alt="Admin Avatar" class="img-fluid rounded-circle img-thumbnail">
                        </div>

                        <div class="col-md-9">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td>Muhammad Nizar Al-Faiq</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabatan</th>
                                        <td>CEO IQSXOO</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>faiqnizar51@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat</th>
                                        <td>Jalan Jatijajar II No. 2A</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nomor Telepon</th>
                                        <td>0856-9247-6174</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->

            <!-- Data Admin Pegawai -->
            <div class="row mt-4">
                <!-- Card Customer -->
                <div class="col-md-4">
                    <div class="card bg-danger">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-users fa-2x"></i> Customer</h3>
                        </div>
                        <div class="card-body text-center">
                            <h2><i class="fas fa-chart-bar"></i> 60%</h2>
                        </div>
                    </div>
                </div>

                <!-- Card User -->
                <div class="col-md-4">
                    <div class="card bg-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-user fa-2x"></i> User</h3>
                        </div>
                        <div class="card-body text-center">
                            <h2><i class="fas fa-chart-bar"></i> 20%</h2>
                        </div>
                    </div>
                </div>

                <!-- Card Pegawai -->
                <div class="col-md-4">
                    <div class="card bg-success">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-user-tie fa-2x"></i> Pegawai</h3>
                        </div>
                        <div class="card-body text-center">
                            <h2><i class="fas fa-chart-bar"></i> 20%</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('pegawai.footer')
