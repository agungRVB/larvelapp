@extends('template.index')
@section('title', 'Edit Pagawai')
@section('content')
    @if(session()->has('success'))
        {{session('success')}}
    @else
        {{session('error')}}
    @endif
    <form action="{{url('pegawai-update/'.$pegawai->id)}}" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Nama</td>
            </tr>
            <tr>
            <td><input type="text" name="nama_pegawai" id="nama_pegawai" value="{{$pegawai->nama_pegawai}}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
            </tr>
            <tr>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10">{{$pegawai->alamat}}</textarea></td>
            </tr>
            <tr>
                <td>No Hp</td>
            </tr>
            <tr>
                <td><input type="text" name="no_hp" id="no_hp" value="{{$pegawai->no_hp}}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="submit"></td>
            </tr>
        </table>
    </form>
@endsection