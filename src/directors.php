

<!DOCTYPE html>

<html>
    
    <style>
        input{
            border-radius: 10px;
            height: 20px;
            align-content: center;
        }
        .button{
            width: 150px;
            height: 30px;
            font-size: 18px;
            letter-spacing: 3px;
            background-color: lightblue;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0,0,0,0.1);
            align-items: center;
            
        }
        .div1{
            background-color: #fff;
            box-shadow: 0px 8px 15px rgba(0,0,0,0.1);
            padding: 50px;
            margin: auto;
            width: 20%;
            border-radius: 3%;
        }
        
        h1{
            text-align: center;
            color: blue;
        }
        .tabreg{
            margin-left: auto;
            margin-right: auto;
            align-items: center;
        }
    </style>
    <?php
    require 'header.php';
    ?>
    <body>
        <form action="directorprocess.php" method="post" enctype="multipart/form-data">
           <h1>Directors Information</h1>
           
            
                <table class="tabreg">
           
            
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="name" maxlength="60" size="20" placeholder='.              Name'></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="degree" maxlength="60" size="20" placeholder='.             Degree'></td>
            </tr>
            
            <tr>
                <td> </td>
            </tr>
            <tr>
                <td><input type="text" name="university" maxlength="90" size="20" placeholder='.          University'></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="mail" maxlength="90" size="20" placeholder='.             E-mail'></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="fb" maxlength="90" size="20" placeholder='.       Facebook Link'></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input type="file" name="image" value="Photo"></td>
            </tr>
            
            <tr>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
            </tr>
            <tr>
                <td> </td>
            </tr>
            <tr>
                <td ><button class="button" name="upload">INSERT</button></td>
            </tr>
            <tr>
                <td ><button class="button" name="delete">Delete</button></td>
            </tr>
        </table>
            <br/><br/>
        </form>
        
    </body>
    <?php
    require 'footer.php';
    ?>
</html>
