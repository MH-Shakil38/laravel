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
    	<a class="btn btn-primary my-3" href="{{url('/add-data')}}">Add Data</a>
    	@if(Session::has('msg'))
        <p class="alert alert-success">{{Session::get('msg')}}</p>
      @endif
    	<table class="table table-bordered" style="">
		  <thead>
		    <tr class="bg-secondary">
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($showData as $key => $value)
		    <tr>
		      <td>{{$key+1}}</td>
		      <td>{{$value->name}}</td>
		      <td>{{$value->email}}</td>
		      <td>
		      	<a href="{{url('/edit-data/'.$value->id)}}" class="btn btn-success">Edit</a>
		      	<a href="{{url('/delete-data/'.$value->id)}}" onclick="return confirm('are you sure you want to delete this record')" class="btn btn-danger">Delete</a>
		      </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
		{{$showData->links()}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>