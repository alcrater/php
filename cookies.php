<?php

$cookie_name="user";
$cookie_value="bob";
$cookie_date = date("l jS \of F Y h:i:s A");
$time_elapsed = timeAgo($time_ago); 
setcookie($cookie_name, $cookie_date, time()+(84600 * 30), "/");

//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // this is equal to one day
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

 <?php
   //check to see if cookie has already been set 
   if (isset($_COOKIE['user'])) {
    // $last = $_COOKIE['user']; }

    //  $day = 86400 + time() ;
    //  //this sets day to the current time, for the cookie expiration
    //  setcookie(user, time (), $day);

    //  if (isset ($last))
    //  {
    //  $change = time () - $last;
    //  if ( $change > 86400)
    //  {
    //  echo "Hello Mate!!! <br> Your last visit was ". date("G:i - m/d/y",$last) ;
    //  // Tells the user when they last visited if it was over a day ago
    //  }
    //  else
    //  {
    //  echo "Thanks for viewing the page, mate!";
    //  //Gives the user a message if they are visiting again in the same day
    //  }
    //  }
    //  else
    //  {
    //  echo "This is your first visit to this page.";
    //  //Greets a first time user
    //   }
   
        setcookie($cookie_name, $cookie_value, time() + (60), "/"); // this expires the cookie

            function timeAgo($time_ago)
            {
                $time_ago = strtotime($time_ago);
                $cur_time   = time();
                $time_elapsed   = $cur_time - $time_ago;
                $seconds    = $time_elapsed ;
                $minutes    = round($time_elapsed / 60 );
                $hours      = round($time_elapsed / 3600);
                $days       = round($time_elapsed / 86400 );
                $weeks      = round($time_elapsed / 604800);
                $months     = round($time_elapsed / 2600640 );
                $years      = round($time_elapsed / 31207680 );
                // Seconds
                if (isset($_COOKIE['user'])) {
                }
                
                if($seconds <= 60){
                    return "just now";
                }
                //Minutes
                else if($minutes <=60){
                    if($minutes==1){
                        return "one minute ago";
                    }
                    else{
                        return "$minutes minutes ago";
                    }
                }
                //Hours
                else if($hours <=24){
                    if($hours==1){
                        return "an hour ago";
                    }else{
                        return "$hours hrs ago";
                    }
                }
                //Days
                else if($days <= 7){
                    if($days==1){
                        return "yesterday";
                    }else{
                        return "$days days ago";
                    }
                }
                //Weeks
                else if($weeks <= 4.3){
                    if($weeks==1){
                        return "a week ago";
                    }else{
                        return "$weeks weeks ago";
                    }
                }
                //Months
                else if($months <=12){
                    if($months==1){
                        return "a month ago";
                    }else{
                        return "$months months ago";

                    }
                }
                //Years
                else{
                    if($years==1){
                        return "one year ago";
                    }else{
                        return "$years years ago";
                    }
        }
    }





    ?> 

    
</body>
</html>