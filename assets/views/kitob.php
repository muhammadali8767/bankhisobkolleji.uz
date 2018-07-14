<div class="col-sm-9" data-effect="slide-right">
  <h1>Elektron kutubxona</h1>
          <ul class="media-list">
            <?php
              $numRows=5;
              $page = (isset($_GET['page'])) ? $_GET['page'] : 0 ;
              $limit = $page*$numRows;
              $count = $Db->count_val('books');
              $books = $Db->get('books',$limit,$numRows);
              foreach($books as $value => $key):
            ?>                
            <li class="media">
              <a class="pull-left" href="#" style="width: 100px; height: 100px;">
                <img class="media-object img-thumbnail" data-src="holder.js/64x64" alt="" src="admin/img/books/<?=$key[image]?>"> 
              </a>
              <div class="media-body">
                <h5 class="media-heading"><a href="#">Kitob nomi: <?=$key[name]?></a></h5>
                <h5 class="media-heading">Mualif: <?=$key[author]?></h5>
                <p><?=$key[description]?></p>
              </div>
              <p>
                <a href="admin/books/<?=$key[book]?> " download class="btn btn-sm btn-primary"><i class="fa fa-download fa-fw"></i>Yuklab olish</a> 
              </p>
            </li>
            <?php 
              endforeach;
            ?>
          </ul>
      </div>
<?php
  if ($count>$numRows) {
?>
  <div class="col-sm-12">
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <ul class="pagination">
      <?php if($page!=0): ?> <li><a href="index.php?view=kitob&page=<?=$page-1?>">«</a></li><?php endif;?>
      <?php
      $j = 1;
      for($i =0; $i<$count/$numRows; $i++)
      {?>   
        <li class="<?php if($page==$i) echo 'active';?>"><a href="index.php?view=kitob&page=<?=$i?>"><?=$j?></a></li>
      <?php
      $j++;
      }
      ?>
      <?php if($page!=$i-1): ?> <li><a   href="index.php?view=kitob&page=<?=$page+1?>">»</a></li><?php endif;?>
    </ul>
  </div>
<?php
  }
?>