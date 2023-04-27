@extends ('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Daftar Siswa</h2>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('siswas.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Absen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswas->firstItem() + $loop->iteration - 1 }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->absen }}</td>
                        <td>
                            <a href="{{ route('siswas.edit', $siswa->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('siswas.destroy', $siswa->id) }}" method="POST"
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
            {{ $siswas->links() }}
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection
