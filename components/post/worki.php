<?php


//РАБОТЫ

$works = R::findAll('works', 'ORDER BY id DESC');
foreach ($works as $work){
  if($work->id=='0'){
    //
  }
  else{
    $id =$work->id;
    $name = $work->name;
    $data = $work->data;
    $text = $work->text;
    
    echo '
    <div class="work">
        <div class="work_f">

          <div class="work__img">
            <img src="../assets/img/Rectangle 21.jpg" alt="">
          </div>
          <div class="work__right">
  
            <div class="work__name">
              <h2>'.$name.'</h2>
            </div>
            <div class="work__text">
              <p>'.$text.'</p>
            </div>
            <div class="work__href">
            <p>'.$data.'</p>  
            <p>ID записи:'.$id.'</p>
            </div>
          </div>
        </div>
      </div>';
  }
  }


?>

