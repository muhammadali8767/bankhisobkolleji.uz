
  <!--content-->
<div class="col-sm-9" data-effect="slide-right">
          <ul class="media-list">
           <?php
      $numRows=5;
      $limit = (isset($_GET['page'])) ? ($_GET['page'])*$numRows : 0 ;
      $count = $Db->count_val('books');
      $books = $Db->get('books',$limit,$numRows);
      foreach($books as $value => $key):
    ?>               
            <li class="media">
              <a class="pull-left" href="#" style="width: 100px; height: 100px;">
                <img class="media-object img-thumbnail" data-src="holder.js/64x64" src="../img/books<?=$key[image]?>"> 
              </a>
              <div class="media-body">
                <h5 class="media-heading"><a href="#">Kitob nomi: <?=$key[name]?></a></h5>
                <h5 class="media-heading">Mualif: <?=$key[author]?></h5>
                <p><?=$key[description]?></p>
              </div>
              <p>
                <a href="index.php?view=show&table=books&id=<?=$key[id]?>" class="btn btn-sm btn-primary">Davomi...</a>
                <a href="index.php?view=bookedit&id=<?=$key[id]?>" class="btn btn-sm btn-primary">O'zgartirish</a>
                <a href="del.php?id=<?=$key[id]?>&c=books&path=img/books/&bookPath=books" class="btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i>O'chirish</a>
                
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

    <a href="index.php?view=bookadd" class="btn btn-sm btn-primary">Kitob qo'shish</a>
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
      <?php if($page!=0): ?> <li><a href="index.php?view=books&page=<?=$page-1?>">«</a></li><?php endif;?>
      <?php
      $j = 1;
      for($i =0; $i<$count/$numRows; $i++)
      {?>   
        <li class="<?php if($page==$i) echo 'active';?>"><a href="index.php?view=books&page=<?=$i?>"><?=$j?></a></li>
      <?php
      $j++;
      }
      ?>
      <?php if($page!=$i-1): ?> <li><a   href="index.php?view=books&page=<?=$page+1?>">»</a></li><?php endif;?>
    </ul>


</div>
<?php

echo $page;
echo $i;
  }else{

  }
?>