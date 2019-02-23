<?php
    $dir    = '[YOUR-DIR-NAME]'; //use asterik symbol * - if wanna listed in working directory
    $files = scandir($dir);
    
    $no = 1;
    foreach($files as $row){
        if(is_dir($row)==1 and $row != '.' and $row != '..' and $row != '.well-known' and $row != 'cgi-bin' and $row != 'css' and $row != 'js') 
            echo $no++.". <a href='https://www.example.com/".$row."' target='_blank'>".$row."</a><br>";
    }
?>
