<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <a href="/admin/casing/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>

                    <tr class="btn-secondary">
                        <td> No </td>
                        <td> Gambar </td>
                        <td> Judul</td>
                        <td> Harga</td>
                        {{-- <td width="50px"> Deskripsi </td> --}}
                        <td> Action </td>
                    </tr>

                    @foreach ($casing as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td><img src="/{{ $item->gambar }}" width="100px" alt=""> </td>
                            <td> {{ $item->judul }} </td>
                            <td> {{ $item->harga }} </td>

                            {{-- <td> {{ $item->desc }} </td> --}}

                            <td>
                                <div class="text-center mb-1">
                                    <a href="/admin/casing/{{ $item->id }}/edit "
                                        class="btn btn-success  mb-2">Edit</a>

                                    <form action="/admin/casing/{{ $item->id }}" method="POST">
                                        @method ('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mx-2">Hapus</button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
