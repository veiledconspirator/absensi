<!DOCTYPE html>
<html>

<head>
    <title>Tambah Siswa</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('siswas.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Masukkan Nama Siswa">
                            </div>
                            <div class="form-group mb-3">
                                <label for="absen">Absen:</label>
                                <input type="text" class="form-control" name="absen"
                                    placeholder="Masukkan Nomor Absen">
                            </div>
                            <div class="form-group mb-3">
                                <label for="kelas">Kelas:</label>
                                <input type="text" class="form-control" name="kelas"
                                    placeholder="Masukkan Kelas Siswa">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Tambah Siswa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
