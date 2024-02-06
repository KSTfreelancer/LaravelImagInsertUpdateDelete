<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imag Insert Update Delete</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5">
            <form action="{{url('/image')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card text-center">
                <div class="card-header bg-secondary text-light">
                  Image Insert Update Delete
                </div>
                <div class="card-body text-start fw-bold">
                    @if ($errors)
                        @foreach ($errors->all() as $error)
                            <li class=" text-danger fw-light">{{$error}}</li>
                        @endforeach
                    @endif
                  <label for="title" class="mt-2">Title</label>
                  <input type="text" id="title" name="title" class="form-control">
                  <label for="description" class="mt-2">Description</label>
                  <textarea name="description" id="description" rows="2" class="form-control"></textarea>
                  <label for="img" class="mt-2">Image</label>
                  <input type="file" id="img" name="img" class="form-control">
                </div>
                <div class="card-footer text-muted ">
                 <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{url('ShowAllProduct')}}" class="btn btn-info text-light">Show All Data</a>
                </div>
              </div>
        </div>
    </form>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>