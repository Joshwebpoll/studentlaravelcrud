<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-primary {
            background-color: #22ab59 !important;
            border: #22ab59
        }

        .btn-primary:hover {
            background-color: #1c8b48 !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Image Upload</h3>

                        <a class="btn btn-primary" href="{{ route('image') }}">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update', ['id' => $id]) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control mb-2"
                                    value="{{ $id->image }}">
                                <img src="{{ asset('storage/images/' . $id->image) }}" alt="" srcset=""
                                    width="100">
                            </div>
                            @error('image')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
