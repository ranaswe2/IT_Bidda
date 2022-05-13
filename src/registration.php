<!DOCTYPE html>

<html>
    
    <style>
        input{
            border-radius: 10px;
            height: 20px;
            border-bottom: none;
        }
        .button{
            width: 150px;
            height: 30px;
            font-size: 18px;
            letter-spacing: 3px;
            background-color: #ADFF2F;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0,0,0,0.1);
            align-items: center;
            
        }
        
        h1,h3{text-align: center}
        .tabreg{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <?php
    require 'header.php';
    ?>
    <body>
        <form action="registration_process.php" method="post">
            <h1>Registration Form</h1>
            <div class='div1'>
                <table class="tabreg">
            <tr>
                <td>Name</td>
                <td><td><input type="text" name="name" maxlength="60" size="30" placeholder="Daniel Diffo"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td><td><input type="text" name="fname" maxlength="60" size="30" placeholder="Issac Milton"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Mother's Name</td>
                <td><td><input type="text" name="mname" maxlength="60" size="30" placeholder="Maria Vrisa"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><td><input type="text" name="address"  size="30" placeholder="Tazmahal Road,Mohammadpur,Dhaka"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Phone Number(+88)</td>
                <td><td><input type="text" name="phone" maxlength="11" size="30" placeholder="01XXXXXXXXXX"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>E-mail Address</td>
                <td><td><input type="text" name="mail" maxlength="60" size="30" placeholder="example@email.com"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Course</td>
                <td colspan="2">
                    <select name="course">
                        <option value='a'>Web Design</option>
                        <option value='b'>Web Development</option>
                        <option value='c'>Graphic Design</option>
                        <option value='c'>HSC Advance ICT</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Amount (Tk)</td>
                <td><td><input type="text" name="amount" maxlength="7" size="30" placeholder='9999.00'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Payment Method</td>
                <td>
                    <select name="pmethod">
                        <option value='a'>Bkash</option>
                        <option value='b'>Rocket</option>
                        <option value='c'>Nogod</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Txn ID</td>
                <td><td><input type="text" name="txn" maxlength="30" size="30" placeholder="XXXXXXXXXX"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Reference*</td>
                <td><td><input type="text" name="reference" maxlength="30" size="30" placeholder="XXXXXXXXXX"></td>
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
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><button class="button">SUBMIT</button></td>
            </tr>
        </table>
            </div>
        </form>
        
        <h3>*  You May Avoid this Field</h3>
    </body>
    <?php
    require 'footer.php';
    ?>
</html>
