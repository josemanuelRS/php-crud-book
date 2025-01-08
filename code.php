<?php
session_start();
require 'dbconn.php';

// delete book
if(isset($_POST['delete_book']))
{
	$book_id = mysqli_real_escape_string($conn, $_POST['delete_book']);

	$query = "DELETE FROM books WHERE id='$book_id'";
	$query_run = mysqli_query($conn, $query);

	if($query_run)
	{
		$_SESSION['message'] = "Book Deleted Successfully";
		header("Location: index.php");
		exit(0);
	} else {
		$_SESSION['message'] = "Book not Deleted";
		header("Location: index.php");
		exit(0);
	}
}

// update book
if(isset($_POST['update_book']))
{
	$book_id = mysqli_real_escape_string($conn, $_POST['book_id']);

	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);
	$genre = mysqli_real_escape_string($conn, $_POST['genre']);
	$pages = mysqli_real_escape_string($conn, $_POST['pages']);

	$query = "UPDATE books SET title='$title', isbn='$isbn', author='$author', 
	genre='$genre', pages='$pages' WHERE id='$book_id'";

	$query_run = mysqli_query($conn, $query);

	if($query_run)
	{
		$_SESSION['message'] = "Book Updated Successfully";
		header("Location: index.php");
		exit(0);
	} else {
		$_SESSION['message'] = "Book not Updated";
		header("Location: index.php");
		exit(0);
	}
}

// create book
if(isset($_POST['save_book']))
{
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
	$author = mysqli_real_escape_string($conn, $_POST['author']);
	$genre = mysqli_real_escape_string($conn, $_POST['genre']);
	$pages = mysqli_real_escape_string($conn, $_POST['pages']);

	$query = "INSERT INTO books (title,isbn,author,genre,pages) VALUES
		('$title', '$isbn', '$author', '$genre', '$pages')";

	$query_run = mysqli_query($conn, $query);

	if($query_run)
	{
		$_SESSION['message'] = "Book Created Successfully";
		header("Location: index.php");
		exit(0);
	} else {
		$_SESSION['message'] = "Book not Created";
		header("Location: index.php");
		exit(0);
	}

	mysqli_close($conn);
}

?>