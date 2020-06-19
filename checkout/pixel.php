<?php
$hostame = $_SERVER['HTTP_HOST'];
echo $hostame;


$uri = $_SERVER['REQUEST_URI'];
echo $uri;

$str=$hostame.$uri;


$fd = fopen("test.txt", 'w') or die("не удалось создать файл");
//$str = "Привет мир";
fwrite($fd, $str);
fclose($fd);


header('P3P:policyref="https://googleads.g.doubleclick.net/pagead/gcn_p3p_.xml", CP="CURa ADMa DEVa TAIo PSAo PSDo OUR IND UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"'); 

?>


       
 
        <!DOCTYPE html> <html> <head> <meta name="referrer" content="no-referrer" /> 
        
        
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2623686081087373&ev=PageView"/>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2623686081087373&ev=Lead"/>

    </head> 
	</html>