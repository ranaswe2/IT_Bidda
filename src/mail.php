<?php
        $to_address= ["marjanmitu12@gmail.com","Fatemapayel25809@gmail.com","tasnimerifa3@gmail.com","motinpatwary.nstu@gmail.com","wahidapervinsmrity@gmail.com","Israt.anika.284@gmail.com","Israt.anika.284@gmail.com","rahiburrahman7076@gmail.com","adnanbge.nstu@gmail.com","Kamrulash39@gmail.com","mehedihasan06112020@gmail.com","nurealommbg@gmail.com","tamalpaul34@gmail.com","samayrajahan02@gmail.com","junaidahmed5033@gmail.com","ranaswe2@gmail.com"];
       //$to_address=["ayondasgupta758@gmail.com","zobaerzisan10@gmail.com","ndnadiaislam@gmail.com","reazarnab@gmail.com","reazarnab@gmail.com","mdredwanhossain99@gmail.com","nirzon.naim@gmail.com","www.sajaldas1213@gmail.com","mdriponahmed774@gmail.com","sultanaaktermis98@gmail.com","khadizaliza851@gmail.com","hasibulislamshojol@gmail.com","aurorajen98@gmail.com","nirzon.naim@gmail.com","mdsujauddinroni@gmail.com"];
        
         // $to_address=["Tonmoysarkar2019@gmail.com","mehedihasan06112020@gmail.com","nurealommbg@gmail.com","tamalpaul34@gmail.com","samayrajahan02@gmail.com","junaidahmed5033@gmail.com","tamannanoshin12@gmai.com", "sultanaaktermis98@gmail.com","parthomazumder281@gmail.com","utpolchondra120@gmail.com","marjanmitu12@gmail.com","Golammdsabur@gmail.com","Mariumakterjemi@gmail.com","mdmerajhossain.phar@gmail.com"];
         $subject= "IT BIDDA Class Link";
         $mailcontent= "প্রিয় শিক্ষার্থী,
আজ রাত ৯:০০ টায় শুরু হতে যাচ্ছে Web Development এর ডেমো ক্লাস। উক্ত ক্লাসে আপনার উপস্থিতি একান্ত কাম্য। ক্লাসে যোগ দিতে নিচের গুগল মিট লিংকে ক্লিক করুনঃ
https://meet.google.com/nrp-zyog-uoc
এবং রাত ১০:০০ টায় শুরু হতে যাচ্ছে Graphic Design এর ডেমো ক্লাস। ক্লাসে যোগ দিতে নিচের গুগল মিট লিংকে ক্লিক করুনঃ
https://meet.google.com/qbb-uawb-tjv";
         $from_address= "From: info.itbidda@gmail.com";
        
        for($i=0;$i<30;$i++){
        if (mail($to_address[$i], $subject, $mailcontent,$from_address)) {
        
    echo 'Ok '.$i;
}
        
        else {
            echo 'sorry';
            
}
        }
        
?>

