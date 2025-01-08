<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add new book</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
            	<h3>Add new Book</h3>
            	<a href="index.php" class="btn btn-secondary float-end">BACK</a>
            </div>
            <div class="card-body">
              <form action="code.php" method="POST">
                <div class="mb-3">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>ISBN</label>
                  <input type="text" name="isbn" class="form-control" required>
                </div>
                <div class="mb-3">
                  <label>Author</label>
                  <input type="text" name="author" class="form-control">
                </div>
                <div class="mb-3">
                  <label>Genre</label>
                  <select name="genre" id="genre">
                    <option value="Adventure">Adventure</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Educational">Educational</option>
                    <option value="Sci-fi">Sci-fi</option>
                    <option value="Thriller">Thriller</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label>Pages</label>
                  <input type="number" name="pages" class="form-control">
                </div>
                <div class="mb-3">
                	<button type="submit" name="save_book" class="btn btn-primary">Save Book</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>