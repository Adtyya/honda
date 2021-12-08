<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Dashboard</title>
        @include('resources.style')
</head>
<body>
    <section>
        <div class="container">
            <h3 class="text-center mt-5">Edit Postingan</h3>
            <div class="row">
                <div class="col-lg">
                    <form action="{{ url('update/post/'.$data->id)}}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="judul">Masukan Judul</label>
                                <input type="text" name="judul" class="form-control" value="{{ $data->judul }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="foto">Masukan Foto</label>
                                <input type="text" name="foto" class="form-control" value="{{ $data->foto }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="deskripsi" class="mb-3">Masukan deskripsi produk</label>
                               <input type="hidden" name="deskripsi" id="x">
                               <trix-editor input="x">{!! $data->deskripsi !!}</trix-editor>
                            </div>
                        </div>
                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">Edit postingan</button>
                            </div>
                            <a href="/dashboard">Kembali ke dashboard</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>