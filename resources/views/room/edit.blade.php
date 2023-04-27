@extends ('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2>Edit Data Kelas</h2>
            </div>
        </div>
        <form action="{{ route('rooms.update', $room->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="form-group">
                        <label for="nama">Kelas:</label>
                        <input type="text" class="form-control" id="nama" name="kelas" value="{{ $room->nama }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Nama Guru:</label>
                        <input type="text" class="form-control" id="kelas" name="guru" value="{{ $room->kelas }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="absen">Jumlah Siswa:</label>
                        <input type="number" class="form-control" id="absen" name="jumlah" value="{{ $room->absen }}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection
