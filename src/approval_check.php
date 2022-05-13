<?php
$query1= "select * from web_design where txn='".$row['txn']."' except ".$query0;
                $result1= $db->query($query1);
                $num_result1= $result1->num_rows;     
                $row1= $result1->fetch_assoc();
                if($num_result1==1){
                    print "<tr bgcolor='red' align='center'>"
            . "<td>". $row1['id'] ."</td>"        
            . '<td>'. $row1['name'] ."</td>"
            . '<td>'. $row1['fname'] ."</td>"
            . '<td>'. $row1['mname'] ."</td>"
            . '<td>'. $row1['address'] ."</td>"
            . '<td>'. $row1['phone'] ."</td>"
            . '<td>'. $row1['mail'] ."</td>"
            . '<td>'. $row1['amount'] ."</td>"
            . '<td>'. $row1['pmethod'] ."</td>"
            . '<td>'. $row1['txn'] ."</td>"
            . '<td>'. $row1['reference'] ."</td>"
            . "<td>Web Design</td>" . "</tr>";
                }
             $query2= "select * from web_development where txn='".$row['txn']."' except ".$query0;
                $result2= $db->query($query2);
                $num_result2= $result2->num_rows;     
                $row2= $result2->fetch_assoc();
                if($num_result2==1){
                    print "<tr bgcolor='red' align='center'>"
            . "<td>". $row2['id'] ."</td>"        
            . '<td>'. $row2['name'] ."</td>"
            . '<td>'. $row2['fname'] ."</td>"
            . '<td>'. $row2['mname'] ."</td>"
            . '<td>'. $row2['address'] ."</td>"
            . '<td>'. $row2['phone'] ."</td>"
            . '<td>'. $row2['mail'] ."</td>"
            . '<td>'. $row2['amount'] ."</td>"
            . '<td>'. $row2['pmethod'] ."</td>"
            . '<td>'. $row2['txn'] ."</td>"
            . '<td>'. $row2['reference'] ."</td>"
            . "<td>Web Development</td>" . "</tr>";
                }
                
             $query3= "select * from graphic_design where txn='".$row['txn']."' except ".$query0;
                $result3= $db->query($query3);
                $num_result3= $result3->num_rows;     
                $row3= $result3->fetch_assoc();
                if($num_result3==1){
                    print "<tr bgcolor='red' align='center'>"
            . "<td>". $row3['id'] ."</td>"        
            . '<td>'. $row3['name'] ."</td>"
            . '<td>'. $row3['fname'] ."</td>"
            . '<td>'. $row3['mname'] ."</td>"
            . '<td>'. $row3['address'] ."</td>"
            . '<td>'. $row3['phone'] ."</td>"
            . '<td>'. $row3['mail'] ."</td>"
            . '<td>'. $row3['amount'] ."</td>"
            . '<td>'. $row3['pmethod'] ."</td>"
            . '<td>'. $row3['txn'] ."</td>"
            . '<td>'. $row3['reference'] ."</td>"
            . "<td>Graphic Design</td>" . "</tr>";
                } 
                
             $query4= "select * from hsc_advance_ict where txn='".$row['txn']."' except ".$query0;
                $result4= $db->query($query4);
                $num_result4= $result4->num_rows;     
                $row4= $result4->fetch_assoc();
                if($num_result4==1){
                    print "<tr bgcolor='red' align='center'>"
            . "<td>". $row4['id'] ."</td>"        
            . '<td>'. $row4['name'] ."</td>"
            . '<td>'. $row4['fname'] ."</td>"
            . '<td>'. $row4['mname'] ."</td>"
            . '<td>'. $row4['address'] ."</td>"
            . '<td>'. $row4['phone'] ."</td>"
            . '<td>'. $row4['mail'] ."</td>"
            . '<td>'. $row4['amount'] ."</td>"
            . '<td>'. $row4['pmethod'] ."</td>"
            . '<td>'. $row4['txn'] ."</td>"
            . '<td>'. $row4['reference'] ."</td>"
            . "<td>HSC ICT</td>" . "</tr>";
                }
?>
