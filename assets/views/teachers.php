  
<div class="col-sm-9" data-effect="slide-right">
  <ul class="media-list">
    <h1>Kollej o'qituvchilari</h1>
    <?php
      $numRows=10;
      $limit = (isset($_GET['page'])) ? ($_GET['page'])*$numRows : 0 ;
      $count = $Db->count_val('teachers');
      $teachers = $Db->get('teachers',$limit,$numRows);
      foreach($teachers as $value => $key):
    ?>                
        <li class="media">
          <a class="pull-left" href="#" style="width: 200px; height: 200px;">
            <img class="media-object img-thumbnail" data-src="holder.js/64x64" alt="" src="img/teachers/<?=$key[image]?>"> 
          </a>
          <div class="media-body">
            <h5 class="media-heading"><a href="#">Sarlavha: <?=$key[title]?></a></h5>
            <p><?=$key[short]?></p>
          </div>
          <p>
            <a href="index.php?view=show&table=teachers&id=<?=$key[id]?>" class="btn btn-sm btn-primary">Davomi...</a>
          </p>
        </li>            
    <?php
      endforeach;
    ?>                
  </ul>
</div>
<?php
  if ($count>$numRows) {
      $page = $_GET['page'];

?>
<div class="col-sm-12">
  <div class="col-sm-3"></div>
  <div class="col-sm-3"></div>
    <ul class="pagination">
      <?php if($page!=0): ?> <li><a href="index.php?view=teachers&page=<?=$page-1?>">«</a></li><?php endif;?>
      <?php
      $j = 1;
      for($i =0; $i<$count/$numRows; $i++)
      {?>   
        <li class="<?php if($page==$i) echo 'active';?>"><a href="index.php?view=teachers&page=<?=$i?>"><?=$j?></a></li>
      <?php
      $j++;
      }
      ?>
      <?php if($page!=$i-1): ?> <li><a   href="index.php?view=teachers&page=<?=$page+1?>">»</a></li><?php endif;?>
    </ul>


</div>
<?php

echo $page;
echo $i;
  }else{

  }
?>