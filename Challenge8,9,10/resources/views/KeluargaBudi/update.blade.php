@extends('Layout.base')

@section('content')
    <h2>Meperbarui Anggota Keluarga </h2>
    @include('KeluargaBudi._form', [
                'keluarga' => $keluarga,
                'anggota' => $anggota
            ])
@endsection