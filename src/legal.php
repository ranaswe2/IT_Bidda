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
            background-color: #fff;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px lightgreen;
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
        <form action="adminsoft.php" method="post">
           <br/><br/> <div class="div1">
            <fieldset>
                <legend>Admin Login</legend>
                <table class="tabreg">
           
            
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><h1> </h1><input type="text" name="user" maxlength="20" size="20" placeholder='.          User Name'></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="pass" maxlength="40" size="20" placeholder='.          Password'><h1> </h1></td>
            </tr>
            <tr>
                <td ><button class="button">LOGIN</button><h1> </h1></td>
            </tr>
        </table>
                
            </fieldset>
            </div><br/><br/>
        </form>
    </body>
    <?php
    require 'footer.php';
    ?>
</html>



