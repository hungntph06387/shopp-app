<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="bg-img">
        <div class="container">
            @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <form action="/save-product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-center">
                    <h3 style="color: #3498db; ">New Product</h3>
                </div>
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ old('name') }}" >
                    <p style="color: red;">@error('name'){{$message}}@enderror</p>
                </div>
                <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Enter price" value="{{ old('price') }}">
                    <p style="color: red;">@error('price'){{$message}}@enderror</p>
                </div>
                <div class="form-group">
                    <label for="">Product Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" placeholder="Enter description">{{{ old('description') }}}</textarea>
                    <p style="color: red;">@error('description'){{$message}}@enderror</p>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select class="form-control" id="categories_id" name="categories_id">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <p style="color: red;">@error('categories_id'){{$message}}@enderror</p>
                </div>
                <div class="form-group">
                    <label for="">Product Image</label>
                    <br>
                    <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                    <p style="color: red;">@error('image'){{$message}}@enderror</p>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Save</button>
                <a href="/admin" class="btn btn-danger btn-block" role="button" aria-pressed="true">Back</a>
            </form>
        </div>
    </div>
</body>

</html>