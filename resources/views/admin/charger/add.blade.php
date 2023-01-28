<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                @if (isset($charger))
                    <form action="/admin/charger/{{ $charger->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <form action="/admin/charger" method="POST" enctype="multipart/form-data">
                @endif
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul"
                        class="form-control                             
                        @error('judul')
                            is-invalid
                            @enderror"
                        placeholder="Judul" value="{{ isset($charger) ? $charger->judul : old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="harga"
                        class="form-control                             
                        @error('harga')
                            is-invalid
                            @enderror"
                        placeholder="Harga" value="{{ isset($charger) ? $charger->harga : old('harga') }}">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea id="summernote" name="deskripsi"class="form-control" cols="30" rows="10">{{ isset($charger) ? $charger->deskripsi : '' }} </textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar"
                        class="form-control 
                            @error('gambar')
                            is-invalid
                            @enderror"
                        placeholder="Gambar">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    @if (isset($charger))
                        <img src="/{{ $charger->gambar }}" width="100%" class="mt-4" alt="">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
