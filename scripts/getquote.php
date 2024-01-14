<?php
function newdayquote(){

$quotes = file_get_contents("home/course/u08/public_html/
    submissions/submission02/resources/quotes.json");

$quotes_data = json_decode($quotes);

$f = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT']
              . "/submissions"
              . "/submission00"
              . "/resources/todaysquote.txt", "w");

fwrite($f, date("l, F jS") . "\n");

$quote_num = rand(1, count($quotes_data));

$quote_today = "Quote of the day from "
               . $quotes_data[$quote_num-1]->author
               . ": "
               . $quotes_data[$quote_num-1]->text;
fwrite($f, $quote_today);
fclose($f);
return $quote_today;
}

if (file_exists($_SERVER['CONTEXT_DOCUMENT_ROOT']
              . "/submissions"
              . "/submission00"
              . "/resources/todaysquote.txt"))
{
$f = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT']
              . "/submissions"
              . "/submission00"
              . "/resources/todaysquote.txt", "r");
   $date = trim(fgets($f));

   if ($date == date("l, F jS")){
       $quote = fgets($f, 2000);
       $quote .= fgets($f, 2000);
       fclose($f);
       echo $quote;
   }else{
       fclose($f);    
       unlink($_SERVER['CONTEXT_DOCUMENT_ROOT']
              . "/submissions"
              . "/submission00"
              . "/resources/todaysquote.txt");
       }
}
else{
   echo newdayquote();
}

?>




               