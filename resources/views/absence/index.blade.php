@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Daftar Absen</h2>
            </div>
        </div>
        <form method="post" action="{{ route('absen.update') }}">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Masuk</th>
                        <th>Sakit</th>
                        <th>Izin</th>
                        <th>Alpha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absences as $absence)
                        <tr>
                            <td>{{ $absences->firstItem() + $loop->iteration - 1 }}</td>
                            <td>{{ $absence->nama }}</td>
                            <td>{{ $absence->kelas }}</td>
                            <td>{{ $absence->absen }}</td>
                            <td><input type="checkbox" name="sakit[]" value="{{ $absence->id }}"></td>
                            <td><input type="checkbox" name="izin[]" value="{{ $absence->id }}"></td>
                            <td><input type="checkbox" name="alpha[]" value="{{ $absence->id }}"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <div class="pagination">
            {{ $absences->links() }}
        </div>
    </div>

    @if (count($absences) > 0)
        <?php
        $headers = ['No', 'Nama', 'Kelas', 'Absen'];
        $rows = [];
        foreach ($absences as $absence) {
            $rows[] = [$absences->firstItem() + $loop->iteration - 1, $absence->nama, $absence->kelas, $absence->absen];
        }
        $rekap = [
            'headers' => $headers,
            'rows' => $rows,
        ];
        ?>
        @include('pdf.index', ['title' => 'Daftar Absences', 'rekap' => $rekap])
    @endif
@endsection
