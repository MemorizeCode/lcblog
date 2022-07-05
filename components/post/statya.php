<?php


  //СТАТЬя


    // $stats = R::loadAll('statyas',$id);
    $stats = R::findAll('statyas');
    $stats = R::findAll('statyas', 'ORDER BY id DESC');
    foreach ($stats as $stat){
      if($stat->id=='0'){
        //
      }
      else{
        
        $name =$stat->name;
        $date = $stat->date;
        $text = $stat->text;
        $silka =$stat->silka;
          echo 
                    '<div class="statya">
                    <div class="statya__name">
                      <h2>'.$name.'</h2>
                    </div>
                    <div class="statya__text">
                      <p id="text_obr">'.$text.'</p>
                    </div>
                    <div class="statya__date">
                      <p>'.$date.'</p>

                      <a href="../statya.php?id='.$stat->id.'">перейти</a>
                    </div>
                  </div>';
      }
    }


?>