<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="/css/main.css">
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
            <form action="/product/{{$products->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- @method('put') -->
                <div class="d-flex justify-content-center">
                    <h3 style="color: #3498db; ">Update Product</h3>
                </div>
                <input type="hidden" name="id" value="{{$products->id}}">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="name" value="{{$products->name}}" >
                </div>
                <div class="form-group">
                    <label for="">Product Price</label>
                    <input type="text" class="form-control" name="price" value="{{$products->price}}">
                </div>
                <div class="form-group">
                    <label for="">Product Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" value="">{{$products->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select class="form-control" id="categories_id" name="categories_id">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <p style="color: red;">@error('categories_id'){{$message}}@enderror</p>
                <div class="form-group">
                    <label for="">Product Image</label>
                    <br>
                    <input type="file" class="form-control" name="image">
                </div>
                <p style="color: red;">@error('image'){{$message}}@enderror</p>

                <button type="submit" class="btn btn-primary btn-block">Update</button>
                <a href="/admin" class="btn btn-danger btn-block" role="button" aria-pressed="true">Back</a>
            </form>
        </div>
    </div>
</body>

</html>