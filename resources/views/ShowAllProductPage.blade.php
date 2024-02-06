<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show All Data</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">
                    @csrf
                <div class="card text-center">
                    <div class="card-header bg-secondary text-light position-relative">
                     Show All Product
                     <a href="{{url('AllDataToBack')}}" class="btn btn-sm btn-info position-absolute end-0 top-0">Back</a>
                    </div>
                    <div class="card-body text-start fw-bold">
                      <table class="table table-hover table-responsive">
                        <thead>
                    </tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                      <tbody>
                        @foreach ($AllData as $Data)
                        <tr>
                            <td>{{$Data->id}}</td>
                            <td>{{$Data->title}}</td>
                            <td>{{$Data->description}}</td>
                            <td><img src="UploadImage/{{$Data->image}}" style="height:100px;width:150px"></td>
                            <td class=" text-center">
                                <a href="{{url('itemDelete',$Data->id)}}" onclick="return confirm('Are you sure to delete this!')" class="btn btn-danger btn-sm">Delete</a>
                                <br><a href="{{url('TargetUpdate',$Data->id)}}" class="btn btn-outline-primary btn-sm mt-2">Edit</a>
                            </td>
                            
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>