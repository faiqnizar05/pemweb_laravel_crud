<form action="proses_edit_profil.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Anda">
    </div>
    <div class="form-group">
        <label for="telepon">Nomor Telepon:</label>
        <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Masukkan nomor telepon Anda">
    </div>
    <div class="form-group">
        <label for="foto">Foto Profil:</label>
        <input type="file" class="form-control-file" id="foto" name="foto">
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>
