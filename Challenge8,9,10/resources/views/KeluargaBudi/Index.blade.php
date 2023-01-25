@extends('Layout.base')

@section('content')
    <a href="{{url('create')}}">Tambah Anggota</a>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Nama
            </th>
            <th>
                Jenis Kelamin
            </th>
            <th>
                Keturunan ke 
            </th>
            <th>
                ID orangtua
            </th>
            <th></th>
        </tr>
        @forelse ($keluarga as $item)
        <tr>
            <td>
                {{$item->id}}
            </td>
            <td>
                {{$item->nama}}
            </td>
            <td>
                {{$item->jenis_kelamin}}
            </td>
            <td>
                {{$item->generasi_ke}}
            </td>
            <td>
                {{$item->id_ortu}}
            </td>
            <td>
                <div class="grid">
                    <div><a href="{{url('/update/'. $item->id )}}">Edit</a></div>
                    <div><a href="{{url('/delete/'. $item->id )}}">Hapus</a></div>
                </div>
            </td>
        </tr>
        @empty
        <tr>No data</tr>
        @endforelse
    </table>
@endsection