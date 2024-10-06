<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('store') }}">Add Image</a>
                <div class="card">
                    <div class="card-header">
                        <h3>Image Upload</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">S/n</th>
                                        <th scope="col">image</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getimage as $getimages)
                                        <tr class="">

                                            <td> {{ $getimages->id }}</td>

                                            <td><img src="{{ asset('storage/images/' . $getimages->image) }}"
                                                    alt="" srcset="" width="50"></td>
                                            <td> <a href="{{ route('editimage', ['id' => $getimages]) }}"
                                                    class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('delete', ['id' => $getimages]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
