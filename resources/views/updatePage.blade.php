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
            <form action="{{url('/Update',$FindData->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card text-center">
                <div class="card-header bg-secondary position-relative text-light">
                  Update Page
                  <a href="{{url('redirectAllDataPage')}}" class=" position-absolute end-0 top-0 btn btn-sm btn-info">Back</a>
                </div>
                <div class="card-body text-start fw-bold">
                  <label for="title" class="mt-2">Title</label>
                  <input type="text" id="title" name="title" class="form-control" value="{{$FindData->title}}">
                  <label for="description" class="mt-2">Description</label>
                  <textarea name="description" id="description" rows="2" class="form-control">{{$FindData->description}}</textarea>
                  <div class="d-block">
                  <label for="img" class="mt-2 d-block">Curent Image</label>
                  <img src="/UploadImage/{{$FindData->image}}" alt="" style="width: 300px;hight:200px">
                  </div>
                  <label for="img" class="mt-2">Select Change Image Path</label>
                  <input type="file" id="img" name="img" class="form-control">
                </div>
                <div class="card-footer text-muted ">
                 <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
        </div>
    </form>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>