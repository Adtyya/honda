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
            <h3 class="text-center mt-5">Selamat Datang, {{ auth()->user()->name }}</h3>
            <a href="/dashboard/add" class="btn btn-primary">Tambah post</a>
            @if(session()->has('succes'))
            <div class="alert alert-success mt-3">
              {{ session()->get('succes') }}
            </div>
            @endif
            @if(session()->has('delete'))
            <div class="alert alert-warning mt-3">
              {{ session()->get('delete') }}
            </div>
            @endif
            <div class="row">
                <div class="col-lg">
                    <div class="col-lg mt-2">
                        <table class="table table-dark table-striped">
                            <tr class="text-center">
                                <th>No</th>
                                <th width="180">Judul</th>
                                <th width='100'>Foto</th>
                                <th width="180">Deskripsi</th>
                                <th>Action</th>
                            </tr>
                          
                            @foreach ($data as $no => $post)
                                <tr class="text-center">
                                    <td>{{ $data->firstItem()+$no }}</td>
                                    <td>{{ $post->judul }}</td>
                                    <td><img src="{{ $post->foto }}" alt="foto" width="180" height="100" style="object-fit: cover"></td>
                                    <td>{!! $post->deskripsi !!}</td>
                                    <td class="text-center">
                                        <a href="{{ url('/dashboard/edit/'.$post->id) }}" class="btn btn-warning">Edit post</a>
                                        <a href="{{ url('/post/delete/'.$post->id) }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div>
                            Showing 
                            {{ $data->firstItem() }}
                            to
                            {{ $data->lastItem() }} data
                            of
                            {{$data->total()}}
                            Entries
                        </div>
                        <div class="mt-3">
                        {{ $data->links() }}
                        </div>
                        <a href="/">Kembali ke home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>