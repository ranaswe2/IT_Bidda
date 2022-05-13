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
        <form action="dashboard.php" method="post">
           <h1>Student Login</h1>
           
            <div class='div1'>
                 <h1><select name="course" class="tabreg" align='center'>
                        <option value='a'>Web Design</option>
                        <option value='b'>Web Development</option>
                        <option value='c'>Graphic Design</option>
                        <option value='c'>HSC Advance ICT</option>
                    </select></h1>
                <table class="tabreg">
           
            
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="id" maxlength="9" size="20" placeholder='.       Student ID'></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input type="text" name="txn" maxlength="20" size="20" placeholder='.          Txn ID'></td>
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
                <td ><button class="button">LOGIN</button></td>
            </tr>
        </table>
            </div><br/><br/>
        </form>
    </body>
    <?php
    require 'footer.php';
    ?>
</html>

