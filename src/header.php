<!DOCTYPE html>

<html>
    
    <style type="text/css">
        .h1{
            color: white;
            /*font-size: 24pt;*/
            font-family: monospace,cursive;
            animation-name: animation;
            animation-duration: 4s;
            animation-timing-function: ease;
        }
        .tr{
            background: black;
        }
        p{
            color: black;
            font-size: 12pt;
            text-align: justify;
            font-family: arial,sans-serif;
        }
        p.foot{
            color: white;
            font-size: 9pt;
            text-align: center;
            font-weight: bold;
        }
        a:link,a:visited,a:active{color: white}
        .a{text-decoration: none}
        .ab:hover{background-color: vlue}
        .menu{
            color: white;
            font-size: 12pt;
            text-align: center;
            font-weight: bold;
        }
        @keyframes animation{
           /* from {background-color:red}
            to {background-color:yellow}*/
           0% {background-color:lightred}
           25% {background-color:#ea1410}
           50% {background-color:#c40c0b}
           100% {background-color:#930303}
           
           0% {transform: translateY(0)}
           50% {transform: translateY(0)}
           100% {transform: translateY(-100)}
        }
        .header{
            animation-name: animation;
            animation-duration: 4s;
            animation-timing-function: ease;
            /*animation-iteration-count: infinite;*/
            border-radius: 50%;
        }
        .headerdive{
            
        }
        
    </style>
    <body>
       <table width="100%" cellpadding="12" cellspacing="0" border="0">
           <tr >
               <td align="center"><img src="itb.png" alt=" LOGO" height="100" width="100"></td>
               <td align="center" class="header" bgcolor="#8a0202"><h1 class="h1"><b>IT BIDDA</b></h1><h6 class="h1">A Online Based Learning Platform</h6></td>
               <td align="center"><img src="itb.png" alt=" LOGO" height="100" width="100"></td>
       </tr>
       
       </table>
        <table width="100%" bgcolor="white" cellpadding="4" cellspacing="4">
            <tr class="tr">
                <td width="20%" class="ab"><a href="index.php" class="a"><img src="itb.png" alt="" height="20" width="20"><span class="menu">Home</span></a></td>
                <td width="20%" class="ab"><a href="directors_info.php" class="a"><img src="itb.png" alt="" height="20" width="20"><span class="menu">Board of Directors</span></a></td>
                <td width="20%" class="ab"><a href="services.php" class="a"><img src="itb.png" alt="" height="20" width="20"><span class="menu">Services</span></a></td>
                <td width="20%" class="ab"><a href="registration.php" class="a"><img src="itb.png" alt="" height="20" width="20"><span class="menu">Registration</span></a></td>
                <td width="20%" class="ab"><a href="login.php" class="a"><img src="itb.png" alt="" height="20" width="20"><span class="menu">Dashboard</span></a></td>
            </tr>
        </table>
    </body>
</html>
