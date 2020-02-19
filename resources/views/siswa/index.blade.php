@extends ('layout.main')
@section('container')
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Alamat</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data_siswa as $siswa)
    <tr>
    <td>{{$siswa->id}}</td>
    <td>{{$siswa->nama}}</td>
    <td>{{$siswa->kelas}}</td>
    <td>{{$siswa->alamat}}</td>
    <td>{{$siswa->foto}}</td>
    </tr>
@endforeach
  </tbody>
</table>
@stop