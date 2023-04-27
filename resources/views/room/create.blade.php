<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kelas</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Kelas</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rooms.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nama">Kelas:</label>
                                <input type="text" class="form-control" name="kelas"
                                    placeholder="Masukkan Nama Room">
                            </div>
                            <div class="form-group mb-3">
                                <label for="absen">Nama Guru:</label>
                                <input type="text" class="form-control" name="guru"
                                    placeholder="Masukkan Nomor Absen">
                            </div>
                            <div class="form-group mb-3">
                                <label for="kelas">Jumlah Siswa:</label>
                                <input type="text" class="form-control" name="jumlah"
                                    placeholder="Masukkan Kelas Room">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Tambah Kelas</button>
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
