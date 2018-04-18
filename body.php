<?php
    if(isset($_GET['stranka']) || isset($_GET['jazyk'])){
        $stranka = $_GET['stranka'];
        $jazyk = $_GET['jazyk'];
    }else{
        $stranka = "";
        $jazyk = "";
        }

    switch($jazyk){
        case 'svk':
            include "php_include_html/nav.php";
            break;
        case 'eng':
            include "eng_pages/eng_nav.php";
            break;
        case '':
            include "php_include_html/nav.php";
            break;
    }
?>    

<body>	
    
    <?php


        switch([$stranka, $jazyk]){
            case ['domov', 'svk']:
                include('str1_domov.html');
                break;  
            case ['displej', 'svk']:
                include('str2_displej.html');
                break;  
            case ['fotoaparat', 'svk']:
                include('str3_fotoaparat.html');
                break;      
            case ['hw', 'svk']:
                include('str4_hw.html');
                break;  
            case ['sw', 'svk']:
                include('str5_sw.html');
                break;  
            case ['galeria', 'svk']:
                include('str6_galeria.html');
                break;
            case ['benchmark', 'svk']:
                include('str7_benchmark.html');
                break;
            case ['kontakt', 'svk']:
                include('str8_kontakt.html');
                break;
                
                
                
            case ['domov', 'eng']:
                include('eng_pages/eng_str1_domov.html');
                break;  
            case ['displej', 'eng']:
                include('eng_pages/eng_str2_displej.html');
                break;  
            case ['fotoaparat', 'eng']:
                include('eng_pages/eng_str3_fotoaparat.html');
                break;      
            case ['hw', 'eng']:
                include('eng_pages/eng_str4_hw.html');
                break;  
            case ['sw', 'eng']:
                include('eng_pages/eng_str5_sw.html');
                break;  
            case ['galeria', 'eng']:
                include('eng_pages/eng_str6_galeria.html');
                break;
            case ['benchmark', 'eng']:
                include('eng_pages/eng_str7_benchmark.html');
                break;
            case ['kontakt', 'eng']:
                include('eng_pages/eng_str8_kontakt.html');
                break;
        }
    ?>
</body>