@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2"><br>
                <h4 class="text-center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h4><br>
                <h4 class="text-center">KARTU HASIL STUDI (KHS)</h4>
            </div>
        </div>
    </div>

    <div class="col-lg-12" style="d-flex flex-row justify-content-between">
        <table class="mt-5 mr-auto" border="0" align="left">
            <thead>
                <tr>
                    <td class="text-left">
                        <p class="text-dark font-weight-bold">Nama:</p>
                    </td>
                    <td>
                        <p class="text-dark">{{ $Mahasiswa->nama }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">
                        <p class="text-dark font-weight-bold">NIM:</p>
                    </td>
                    <td>
                        <p class="text-dark">{{ $Mahasiswa->nim }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">
                        <p class="text-dark font-weight-bold">Kelas:</p>
                    </td>
                    <td>
                        <p class="text-dark">{{ $Mahasiswa->kelas->nama_kelas }}</p>
                    </td>
                </tr>
            </thead>
        </table>
    </div>

    <table class="table table-bordered">
        <tr>
            <th class="text-center">Mata Kuliah</th>
            <th class="text-center">SKS</th>
            <th class="text-center">Semester</th>
            <th class="text-center">Nilai</th>
        </tr>
        @foreach ($matkul as $mk)
            <tr>
                <td>{{ $mk->mataKuliah->nama_matkul }}</td>
                <td class="text-center">{{ $mk->mataKuliah->sks }}</td>
                <td class="text-center">{{ $mk->mataKuliah->semester }}</td>
                <td class="text-center">{{ $mk->nilai }}</td>
            </tr>
        @endforeach

</table>
@endsection