<!DOCTYPE html>
<html lang="en">
<head>
    <  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" text-light href="/">Products</a>
    </li>
 
  </ul>
</nav>
<div class="container">
    <div class="row justify-content center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
            <form method="POST" action="/store">
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="textarea" name="description" class="form-control">
                </div>
                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" name="image" class="form-conrol">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div></div>
<br>
    </div>
</body>
</html>