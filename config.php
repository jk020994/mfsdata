<?php  
//Tao ket noi toi DTB
$currency = '$';
//
$host = "localhost"; 
// Tai khoan co so du lieu 
$user = "mfsdata_user";  
// Mat khau
$pass = "MobiHP@#$";  
// Ten database
$dtb ="mfsdata_base";
$mysqli = new mysqli($host, $user, $pass, $dtb);
$mysqli->set_charset("utf8");


/////////////////////////////////////////////////
function weeks_in_month($year, $month, $start_day_of_week)
  {
    // Total number of days in the given month.
    $num_of_days = date("t", mktime(0,0,0,$month,1,$year));
 
    // Count the number of times it hits $start_day_of_week.
    $num_of_weeks = 0;
    for($i=1; $i<=$num_of_days; $i++)
    {
      $day_of_week = date('w', mktime(0,0,0,$month,$i,$year));
      if($day_of_week==$start_day_of_week)
        $num_of_weeks++;
    }
 
    return $num_of_weeks;
  }
function  get_number_week($year, $month, $day, $start_day_of_week)
  {
    // Count the number of times it hits $start_day_of_week.
    $num_of_weeks = 0;
    for($i=1; $i<=$day; $i++)
    {
      $day_of_week = date('w', mktime(0,0,0,$month,$i,$year));
      if ($day_of_week==$start_day_of_week) 
        $num_of_weeks++;
    }
    return $num_of_weeks;
  }
?>