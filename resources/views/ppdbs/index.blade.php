@extends('ppdbs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PPDB 2021 SMK Wikrama Bogor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ppdbs.create') }}"> Create New Siswa</a>
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
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ppdbs as $ppdb)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ppdb->nis }}</td>
            <td>{{ $ppdb->nama }}</td>
            <td>{{ $ppdb->jk }}</td>
            <td>{{ $ppdb->tempat_lahir }}</td>
            <td>{{ $ppdb->tgl_lahir }}</td>
            <td>{{ $ppdb->alamat }}</td>
            <td>{{ $ppdb->asal_skl }}</td>
            <td>{{ $ppdb->kelas }}</td>
            <td>{{ $ppdb->jurusan }}</td>
            <td>
                <form action="{{ route('ppdbs.destroy',$ppdb->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('ppdbs.edit',$ppdb->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $ppdbs->links() !!}
      
@endsection