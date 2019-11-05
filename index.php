<?php
$days=365;
        $cigs_mon_fri=rand(3,4);
$cigs_sat=rand(10,20);
        $cigs_sun=rand(1,3);
        $pack_price=3.50;
        $weeks_year=52;
        $workdays= $days-$weeks_year*2;
        $sat=52;
        $sun=52;
        
        for ($m = 1; $m <= $days; $m++) {
          $ttl_sun= $cigs_sun*$sun;
          $ttl_sat=  $cigs_sat*$sat;
          $ttl_workdays=  $cigs_mon_fri*$workdays;
          $ttl=$ttl_sun+$ttl_sat+$ttl_workdays;
         $ttl_price= $ttl/20*3.50;
        }
        
?>
<html lang="en">
    <head>
    </head>
    <body>
    <h1>Mano dumu skaiciuokle</h1>
    <h2>
      <?php print "Per $days dienas surukysiu $ttl uz $ttl_price" ?>
    </h2>
    </body>
</html>