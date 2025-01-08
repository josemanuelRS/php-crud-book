<?php
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

    <title>Edit book</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
            	<h3>Edit Book</h3>
            	<a href="index.php" class="btn btn-secondary float-end">BACK</a>
            </div>
            <div class="card-body">

            	<?php
        		if(isset($_GET['id']))
        		{
        			$book_id = mysqli_real_escape_string($conn, $_GET['id']);
        			$query = "SELECT * FROM books WHERE id='$book_id'";
        			$query_run = mysqli_query($conn, $query);

        			if(mysqli_num_rows($query_run) > 0)
        			{
        				$book = mysqli_fetch_array($query_run);
        				?>

        				<form action="code.php" method="POST">
        							<input type="hidden" name="book_id" value="<?= $book['id']; ?>">
			                <div class="mb-3">
			                  <label>Title</label>
			                  <input type="text" name="title" value="<?=$book['title']; ?>" class="form-control" required>
			                </div>
			                <div class="mb-3">
			                  <label>ISBN</label>
			                  <input type="text" name="isbn" value="<?=$book['isbn']; ?>" class="form-control" required>
			                </div>
			                <div class="mb-3">
			                  <label>Author</label>
			                  <input type="text" name="author" value="<?=$book['author']; ?>" class="form-control">
			                </div>
			                <div class="mb-3">
			                  <label>Genre</label>
			                  <select name="genre" id="genre">
			                    <option value="Adventure" <?= ($book['genre'] == 'Adventure') ? 'selected' : ''; ?>>Adventure</option>
                    			<option value="Comedy" <?= ($book['genre'] == 'Comedy') ? 'selected' : ''; ?>>Comedy</option>
                    			<option value="Educational" <?= ($book['genre'] == 'Educational') ? 'selected' : ''; ?>>Educational</option>
                   				<option value="Sci-fi" <?= ($book['genre'] == 'Sci-fi') ? 'selected' : ''; ?>>Sci-fi</option>
                    			<option value="Thriller" <?= ($book['genre'] == 'Thriller') ? 'selected' : ''; ?>>Thriller</option>
			                  </select>
			                </div>
			                <div class="mb-3">
			                  <label>Pages</label>
			                  <input type="number" name="pages" value="<?=$book['pages']; ?>" class="form-control">
			                </div>
			                <div class="mb-3">
			                	<button type="submit" name="update_book" class="btn btn-primary">Update Book</button>
			                </div>
          				</form>

        				<?php

        			} else {
        				echo "<h4>No Item found</h4>";
        			}
        		}
            	?>
              
            </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>