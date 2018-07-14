<div class="col-sm-9">
  <?php

    $numRows=5;
    $page = (isset($_GET['page'])) ? $_GET['page'] : 0 ;
    $limit = $page*$numRows;
    $count = $Db->count_val('galery');
    $galery = $Db->get('galery',$limit,$numRows);
    foreach($galery as $value => $key):
  ?>                
      <div class="col-lg-6 col-sm-6 ">
        <div id="myCarouselV" class="carousel thumbnail fade">
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="item active">
                <img src="admin/img/galery/<?=$key[image]?>" class="img-thumbnail">
          </div>
        </div>
      </div>
      </div>  
  <?php
    endforeach;
  ?> 
</div>
<?php
  if ($count>$numRows) {
?>
  <div class="col-sm-12">
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <ul class="pagination">
      <?php if($page!=0): ?> <li><a href="index.php?view=foto&page=<?=$page-1?>">«</a></li><?php endif;?>
      <?php
      $j = 1;
      for($i =0; $i<$count/$numRows; $i++)
      {?>   
        <li class="<?php if($page==$i) echo 'active';?>"><a href="index.php?view=foto&page=<?=$i?>"><?=$j?></a></li>
      <?php
      $j++;
      }
      ?>
      <?php if($page!=$i-1): ?> <li><a   href="index.php?view=foto&page=<?=$page+1?>">»</a></li><?php endif;?>
    </ul>
  </div>
<?php
  }
?>