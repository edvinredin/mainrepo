  <?php
      $grizai_velai= rand(0,1);
              $grizai_isgeres= rand(0,1);
            ?>
<html>
    <head>
    </head>
    <body>
        <h1>Buitine skaiciuokle</h1>
        <h2>
            <?php 
             if ($grizai_velai==1 && $grizai_isgeres==1):
                  print 'grizai velai ir isgeres ir miegosi ant sofos';
                      else:
                  print '';
              endif;
                   if ($grizai_velai==0 && $grizai_isgeres==1):
                  print 'grizai isgeres ir nemiegosi ant sofos';
                      else:
                  print '';
              endif;
                   if ($grizai_velai==1 && $grizai_isgeres==0):
                  print 'grizai velai ir nemiegosi ant sofos';
                      else:
                  print '';
              endif;    
                     if ($grizai_velai==0 && $grizai_isgeres==0):
                  print 'nieko nepadarei ir nemiegosi ant sofos';
                      else:
                  print '';
              endif;     
            ?>
        </h2>
    </body>
</html>