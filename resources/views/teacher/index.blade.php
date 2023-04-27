@extends ('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Daftar Guru</h2>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('teachers.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Induk</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teachers->firstItem() + $loop->iteration - 1 }}</td>
                        <td>{{ $teacher->induk }}</td>
                        <td>{{ $teacher->nama }}</td>
                        <td>{{ $teacher->kelas }}</td>
                        <td>
                            {{ $teacher->jenis_kelamin == 1 ? 'Laki-Laki' : 'Perempuan' }}
                        </td>
                        <td>
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST"
                                onsubmit="return confirm('Hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $teachers->links() }}
        </div>

    </div>
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection
