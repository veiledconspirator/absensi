@extends ('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2>Edit Data Siswa</h2>
            </div>
        </div>
        <form action="{{ route('siswas.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas:</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $siswa->kelas }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="absen">Absen:</label>
                        <input type="number" class="form-control" id="absen" name="absen" value="{{ $siswa->absen }}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('siswas.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection
