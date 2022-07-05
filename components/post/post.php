  <?php
  //ОТОБРАЖАЮТСЯ ПОСТЫ(СТЕНА) НА INDEX
    

    // $taskss = R::loadAll('tasksyas',$id);
    $tasks = R::findAll('tasks');
    $tasks = R::findAll('tasks', 'ORDER BY id DESC');
    foreach ($tasks as $task){
      if($task->id=='0'){
        //
      }
      else{
        $date = $task->date;
        $text_post = $task->text;
        echo '
        <div class="post">
                        <div class="post_text">
                            <p>'.$text_post.'</p>
                        </div>
                        <div class="post_data">
                        <p>'.$date.'</p>
                        <p>ID записи: '.$task->id.'</p>
                        
                        </div>
                    </div>';
      }
      }
      


  ?>
