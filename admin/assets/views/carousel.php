<div class="col-sm-9" data-effect="slide-right">
<h1>Karusel</h1>
  <ul class="media-list">
            
    <?php
      $numRows=5;
      $limit = (isset($_GET['page'])) ? ($_GET['page'])*$numRows : 0 ;
      $count = $Db->count_val('carousel');
      $carousel = $Db->get('carousel',$limit,$numRows);
      foreach($carousel as $value => $key):
    ?>               
              <li class="media">
              <a class="pull-left" href="#" style="width: 200px;  height: 160px;">
                <img class="media-object img-thumbnail" data-src="holder.js/64x64" alt="" src="img/carousel/<?=$key[image]?>"> 
              </a>

                <h5 class="media-heading"><a href="#">Sarlavha: <?=$key[title]?></a></h5>
                <p><?=$key[short]?></p>
          <p>
            <a href="index.php?view=show&table=carousel&id=<?=$key[id]?>" class="btn btn-sm btn-primary">Davomi...</a>
            <a href="index.php?view=carouseledit&id=<?=$key[id]?>" class="btn btn-sm btn-primary">O'zgartirish</a>
            <a href="del.php?id=<?=$key[id]?>&c=carousel&path=img/carousel/" class="btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i>O'chirish</a>
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

    <a href="index.php?view=carouseladd" class="btn btn-sm btn-primary">Karusel qo'shish</a>
    <?php
      if ($count<$numRows)echo "<br><br>";
    ?>
     

</div>
<?php
  if ($count>$numRows) {
      $page = $_GET['page'];

?>
<div class="col-sm-12">
  <div class="col-sm-3"></div>
  <div class="col-sm-3"></div>
    <ul class="pagination">
      <?php if($page!=0): ?> <li><a href="index.php?view=carousel&page=<?=$page-1?>">«</a></li><?php endif;?>
      <?php
      $j = 1;
      for($i =0; $i<$count/$numRows; $i++)
      {?>   
        <li class="<?php if($page==$i) echo 'active';?>"><a href="index.php?view=carousel&page=<?=$i?>"><?=$j?></a></li>
      <?php
      $j++;
      }
      ?>
      <?php if($page!=$i-1): ?> <li><a   href="index.php?view=carousel&page=<?=$page+1?>">»</a></li><?php endif;?>
    </ul>


</div>
<?php

echo $page;
echo $i;
  }else{

  }
?>