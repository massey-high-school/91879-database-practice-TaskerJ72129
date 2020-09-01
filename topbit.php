<!DOCTYPE HTML>

<html lang="en">

<?php
    
    session_start();
    include("config.php");
    include("functions.php"); // iclude data sanitising...
    
    // Connect to database
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
         exit;
    }
    
?>
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Review Database">
    <meta name="keywords" content="books, reading, fiction, non-fiction, genre, reviews">
    <meta name="author" content="James Tasker">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/bookstyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="Images/logo_book.png" width="150" height="150" alt="books" />
            
            </div>    <!-- / logo -->
        </a>
            
            
            <div>
                <h1>Reading</h1>
            </div>
        </div>    <!-- / banner -->
        
        
    <!-- side bar -->
    <div class ="box side">
        <h2>Search | <a class="side" href="showall.php">Show All</a></h2>
        <i>Type part of the title / author name if desired</i>

        <hr />
        <!-- Start of Title Search -->

        <form method="post" action="title_search.php"
        enctype="multipart/form-data" >
            
<<<<<<< HEAD
            <input class="search" trpe="text" name="title" size="40" value=""
            required placeholder="Title..." />
            
            <input class="submit" type="submit" name="find_title"
                   value="Search" />

        </form>
                  
            <!-- End of Title Search -->


            Author Search<br />
            Genre Search<br />
            Rating Search
=======
            <hr />
        <!-- Start of Title Search -->
        
        <form method="post" action="title_search.php"
        enctype="multipart/form-data ">
            
            <input class="search" type="text" size="40" value=""
            required placeholder="Title..." />
        
            <input class="submit" type="submit" name="find_title"\
                   value="Search" />
            
        </form>
        <!-- End of Title Search -->
        
        <hr />
        Author Search<br />
        Genre Search<br />
        Rating Search
>>>>>>> 24ace550bd5303d268f096dd7d904d94fcfc99c8
        
            
        </div> <!-- / side bar -->