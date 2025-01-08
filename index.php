<?php
  session_start();
  require 'dbconn.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Books</title>
  </head>
  <body>
    <div class="container">

      <?php include("message.php"); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card-header">
            <h3>Books</h3>
            <a href="book-create.php" class="btn btn-secondary">Add new Book</a>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>ISBN</th>
                  <th>Author</th>
                  <th>Genre</th>
                  <th>Nº Pages</th>
                  <th>Action</th>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT * FROM books";
                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $book)
                    {
                      ?>
                      <tr>
                        <td><?= $book['id']?></td>
                        <td><?= $book['title']?></td>
                        <td><?= $book['isbn']?></td>
                        <td><?= $book['author']?></td>
                        <td><?= $book['genre']?></td>
                        <td><?= $book['pages']?></td>
                        <td>
                          <a href="book-edit.php?id=<?= $book['id']; ?>" class="btn btn-success">Edit</a>
                          <form action="code.php" method="POST" class="d-inline">
                            <button type="submit" name="delete_book" value="<?= $book['id']; ?>" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                      <?php
                    }
                  } else {
                    echo "<h5>No results</h5>";
                  }
                 ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>