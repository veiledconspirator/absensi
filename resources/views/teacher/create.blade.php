<!DOCTYPE html>
<html>

<head>
    <title>Tambah Guru</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Guru</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('teachers.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nama">Induk:</label>
                                <input type="text" class="form-control" name="induk"
                                    placeholder="Masukkan Nomor Induk Guru">
                            </div>
                            <div class="form-group mb-3">
                                <label for="absen">Nama:</label>
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Masukkan Nama Guru">
                            </div>
                            <div class="form-group mb-3">
                                <label for="kelas">Kelas:</label>
                                <input type="text" class="form-control" name="kelas"
                                    placeholder="Masukkan Kelas Mengajar Guru">
                            </div>
                            {{-- <div class="form-group mb-3">
                                <label for="kelas">Jenis Kelamin:</label>
                                <input type="text" class="form-control" name="kelas"
                                    placeholder="Masukkan Kelamin">
                            </div> --}}
                            <div class="form-group mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select name="jenis_kelamin" class="form-select" aria-label="Default select example" style="margin-bottom:10px">
                                    <option selected>Jenis Kelamin</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Tambah Guru</button>
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
