<?php


function CreatePHPFile($title, $content)
{
    $new_php_file = fopen($title.".php", "w") or die("Cannot Create a file");
    fwrite($new_php_file, $content);
    fclose($new_php_file);

}



$file_name = "hello_there";
$content_to_write = '
<?php

//This is a comment

    echo "This is a test page!"; 
    echo "Exam number two!";
                        
//This is the end of a comment

?>';


CreatePHPFile($file_name,$content_to_write);




?>