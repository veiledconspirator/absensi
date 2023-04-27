@extends ('layout.app')

@section('content')
    <div class="container">
        <h2>Edit Guru</h2>

        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="induk">Induk:</label>
                <input type="text" class="form-control" id="induk" name="induk" value="{{ $teacher->induk }}">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $teacher->nama }}">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $teacher->kelas }}">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="1" {{ $teacher->jenis_kelamin == 1 ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="2" {{ $teacher->jenis_kelamin == 2 ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection
