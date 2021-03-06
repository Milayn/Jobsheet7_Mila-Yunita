@extends('mahasiswa.layout')
@section('content')
    <style type="text/css">
		.pagination li{
			float: center;
			list-style-type: none;
			margin:7px;
		}
	</style>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2"><br>
                <h2><center> JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</center></h2>
            </div>
            <br><br>
            <div class="d-flex justify-content-between">
                <div>
                <form class="form-inline" method="POST" action="{{ route('mahasiswa.search') }}">
                    @csrf
                    <input name="search" class="form-control mr-sm-2" type="text" autocomplete="off"
                        placeholder="Search" value="{{old('search')}}">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form>
                </div>
                <div>   
                    <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>

 @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
 @endif

 <table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        {{-- <th>E-mail</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th> --}}
        <th>Foto</th>
        <th>Action</th>
    </tr>
 @foreach ($paginate as $mhs)
    <tr>
        <td>{{ $mhs ->nim }}</td>
        <td>{{ $mhs ->nama }}</td>
        <td>{{ $mhs ->kelas->nama_kelas }}</td>
        <td>{{ $mhs ->jurusan }}</td>
        <td>
            <img width="50px" src="{{asset('storage/'.$mhs->foto)}}">
        </td> 

        {{-- <td>{{ $mhs ->email }}</td>
        <td>{{ $mhs ->alamat }}</td>
        <td>{{ $mhs ->tanggalLahir }}</td> --}}
        <td>
          <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
            <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-warning" href="{{ route('mahasiswa.khs',$mhs->id_mahasiswa)}}">Nilai</a>
          </form>
        </td>
    </tr>
 @endforeach
 </table>
 <br/>
     
	{{ $paginate->links() }}
@endsection