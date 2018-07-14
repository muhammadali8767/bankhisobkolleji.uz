<div class="col-sm-9" data-effect="slide-right">
  <ul class="media-list">
            
    <?php
      $numRows=10;
      $limit =0;
      $count = $Db->count_val('posts');
      $posts = $Db->get('posts',$limit,$numRows);
      foreach($posts as $value => $key):
    ?>                
        <li class="media">
          <div class="media-body">
            <h5 class="media-heading"><a href="#">Yuboruvchi: <?=$key[email]?></a></h5>
            <p><?=$key[short]?></p>
          </div>
          <p>
            <a href="index.php?view=show&table=posts&id=<?=$key[id]?>" class="btn btn-sm btn-primary">Ko'rish...</a>
            <a href="del.php?table=posts&id=<?=$key[id]?>" class="btn btn-sm btn-danger">O'chirish...</a>
          </p>
        </li>            
    <?php
      endforeach;
    ?>                
  </ul>
</div>
<div class="col-sm-12">
  <div class="col-sm-3"></div>
  <div class="col-sm-3"></div>
    <ul class="pagination">
      <li><a href="">«</a></li>
      <?php  
      $retVal = (isset($_GET['page'])) ? $_GET['page'] : null ;
      echo $retVal;
      $j = 1;
      $count = 5;
      for($i =0; $i<$count; $i++)
      {?>   
        <li class=""><a href="index.php?view=news&page=<?=$j?>"><?=$j?></a></li>
      <?php
      $j++;
      }
      ?>
      <li class="disabled"><a href="index.php?view=news&page=<?=$page+1?>">»</a></li>
    </ul>  
</div>