<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <a class="btn btn-primary my-3" href="{{url('/')}}">Show Data</a>
      <form method="post" action="{{url('/update-data/'.$editData->id)}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$editData->name}}">
          @error('name')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="{{$editData->email}}">
          @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <input type="submit" class="btn btn-primary  my-2" value="Update">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>