<!DOCTYPE html>

<html>
    <head>
        <title>New Book Reg.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        h2{text-align: center} 
        .table{
            margin-left: auto;
            margin-right: auto;    
        }
    </style>
    <body>
        <h2>New Book Registration</h2>
        <form action="insert_book.php" method="post">
            <fieldset>
            <legend>Fill All Fields</legend>
            <table class="table">
           <tr>
                <td>ISBN</td>
                <td><input type="text" name="isbn" maxlength="13" size="30"></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" name="author" maxlength="30" size="30"></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" maxlength="60" size="30"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" maxlength="7" size="30"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Register"></td>
            </tr>
        </table>
            </fieldset>
        </form>
    </body>
</html>
