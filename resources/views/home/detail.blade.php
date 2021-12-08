<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    @include('resources.style')
</head>
<body>          
    <div class="container mt-5">
        <div class="row">
            <div class="col-md">
                <div class="text-center">
                    <img src="{{ $post->foto }}" alt="foto produk" width="480" height="240" style="object-fit: cover">
                </div>
                <h3 class="mb-3 mt-5">{{ $post->judul }}</h3> 
                <p>{!! $post->deskripsi !!}</p>


                <a href="/#produk" class="btn" style="background-color: #ff2626; color:white;">Kembali ke home</a>
            </div>
        </div>
    </div>

    @include('resources.js')
</body>
</html>