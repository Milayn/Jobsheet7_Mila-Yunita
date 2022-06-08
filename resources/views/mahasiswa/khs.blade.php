@extends('mahasiswa.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2"><br>
            <h2><center> JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</center></h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="mt-5">
            <h1 class="text-center">KARTU HASIL STUDI (KHS)</h2>
        </div>
    </div>
</div>
<div class="col-lg-12 d-flex align-item-center flex-row justify-content-between">
    <table class="mt-4">
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
    <a style="width: 120px; height: 40px" href="{{ route('mahasiswa.cetak_khs', $Mahasiswa->id_mahasiswa) }}"
        class="mt-4 btn btn-success float-right">Cetak KHS</a>
</div>
<table class="table table-bordered">
        <tr>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Nilai</th>
        </tr>
        @foreach ($matkul as $mk)
            <tr>
                <td>{{ $mk->mataKuliah->nama_matkul }}</td>
                <td>{{ $mk->mataKuliah->sks }}</td>
                <td>{{ $mk->mataKuliah->semester }}</td>
                <td>{{ $mk->nilai }}</td>
            </tr>
        @endforeach

</table>
@endsection