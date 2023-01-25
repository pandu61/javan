@extends('Layout.base')

@section('content')
    <h2>Menambahkan Anggota Keluarga Baru</h2>
    @include('KeluargaBudi._form', [
                'keluarga' => $keluarga,
                'anggota' => $anggota
            ])
@endsection