<!DOCTYPE html>

<html>
    <head>
        <title>Services</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        .table{
            margin-left: auto;
            margin-right: auto;
            
        }
        h2{
            text-align: center;
        }
    </style>
    <?php
    require 'header.php';
    require 'notice.php';
    ?>
    <body>
        <h2>Search Your Favorite Books</h2>
        <form action="results.php" method="POST">
        <table border="0" class="table">
            <tr><td><b>Search Type</b></td></tr>
                <tr><td><select name="searchtype">
                    <option value="author">Author</option>
                    <option value="title"> Title</option>
                    <option value="isbn">ISBN</option>
                </select></td></tr>
                <tr><td> </td></tr>
                <tr><td><b>Enter Search Terms</b></td></tr>
                <tr><td><input type="text" name="searchterm" size="40" /></td></tr>
                <tr><td align="right"><input type="submit" value="Search" name="submit"  /></td></tr>
        </table>
            </form>
    </body>
    <?php
    require 'footer.php';
    ?>
</html>
