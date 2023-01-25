@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$Keluarga->id ?? null}}">

    <div class="grid">
        <div>
            <label>Nama</label>
        </div>
        <div>
            <input type="text" name="nama" value="{{old('nama') ?? $keluarga->nama}}">
        </div>
    </div>

    <div class="grid">
        <div>
            <label>jenis kelamin</label>
        </div>
        <div>
            <input type="radio"  name="jenis_kelamin" value="P">
            <label >Perempuan</label>
            <input type="radio"  name="jenis_kelamin" value="L">
            <label >Laki-laki</label><br>
        </div>
    </div>

    <div class="grid">
        <div>
            <label>Anak dari</label>
        </div>
        <div>
            <select name="id_ortu">
                <option></option>
                @foreach ($anggota as $item)
                    <option value="{{$item->id}}" 
                        {{$item->id == $keluarga->id_ortu ? 'selected' : '' }}    >
                        {{$item->nama}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="grid">
        <div>
            <label>generasi_ke</label>
        </div>
        <div>
            <input type="text" name="generasi_ke" value="{{old('generasi_ke') ?? $keluarga->generasi_ke}}">
        </div>
    </div>

    <div class="grid">
        <input type="submit" value="Simpan">
    </div>
</form>