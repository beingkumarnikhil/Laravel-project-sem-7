<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1.0 ,minimum-scale=1.0">
        <meta  http-equiv="X-UA-Compatible" content="ie=edge">




	<title>Laravel Project</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">


</head>
	<body class ="bg-light">
	<div class="p-3 mb-2 bg-dark text-white">
		<div class ="container">
			<div class="h3">Nikhil Kumar     Laravel Project      TC-1</div>

			

        </div>
    </div>
    <div class="container">
				<div class="row">
					<div class="col-md-12 text-right mb-3">
						<a href="{{route('articles.add')}}" class=" btn btn-primary">Add</a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="card">
					<div class="card-header "> <h5>Articles/Add</h5></div>
					<div class="card-body">
						<form action="{{url('articles/add')}}" method="post" id="addArticle">
						@csrf
							<div class="form-group">
								<label for="" >Title</label>
								<input type="text" name="title" id="title" value="{{old('title')}}" class="form-control {{($errors->any() && $errors->first('title')) ? 'is-invalid' : ''}}">
							    @if($errors->any())

                                 <p class="invalid-feedback">{{$errors->first('title')}}</p>

							    @endif

							</div>
							<div class="form-group">
								<label for="" >Discription</label>
								<textarea name="description" id="description" cols="30" rows="5" class="form-control {{($errors->any() && $errors->first('description')) ? 'is-invalid' : ''}}">{{old('description')}}</textarea>

								@if($errors->any())

                                 <p class="invalid-feedback">{{$errors->first('description')}}</p>

							    @endif


							</div>
							<div class="form-group">
								<label for="" >Author</label>
								<input type="text" name="author" id="author" value="{{old('author')}}" class="form-control {{($errors->any() && $errors->first('author')) ? 'is-invalid' : ''}}">

								@if($errors->any())

                                 <p class="invalid-feedback">{{$errors->first('author')}}</p>

							    @endif


							</div>
							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary">Save Article </button>

							</div>

						</form>
						
						
					</div>
					</div>

					</div>


				</div>
	</div>
</body>
</html>