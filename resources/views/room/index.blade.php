@extends ('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Daftar Kelas</h2>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('rooms.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Nama Guru</th>
                    <th>Jumlah Siswa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $rooms->firstItem() + $loop->iteration - 1 }}</td>
                        <td>{{ $room->kelas }}</td>
                        <td>{{ $room->guru }}</td>
                        <td>{{ $room->jumlah }}</td>
                        <td>
                            <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST"
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
            {{ $rooms->links() }}
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection
