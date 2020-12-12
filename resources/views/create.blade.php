<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Kawser's Blog</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Welcome </h1>
        <h2 class="text-center">To</h2>
        <h1 class="text-center">Kawser's Blog</h1>

        <div class="row">
            @if (Session::get('success'))
            <div class="alert alert-success" role="alert">
               Post Inserted Successful
              </div>
            @endif
            <div class="col-md-12">
            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Post Title</label>
                      <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Enter Post Title">
                    </div>
                 
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Post Descrtiption</label>
                      <textarea class="form-control" name="description" placeholder="Enter Post Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="custom-file mb-3">
                        <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit Post</button>
                  </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>