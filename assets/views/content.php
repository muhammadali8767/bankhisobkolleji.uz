<!--carousel-->
   <div class="col-lg-9 visible-lg">

        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
          <?php $j=0;
          $carousel = $Db->get('carousel');
          foreach($carousel as $value => $key):
          ?>                
            <li data-target="#myCarousel" data-slide-to="<?=$j?>"
             class="<?php if($j==0) echo "active"; $j++;?>"></li>
          <?php

          endforeach;
          ?>
          </ol>
          <div style="max-height:466px;" class="carousel-inner">

<?php $i=1;
            foreach($carousel as $value => $key):
?>                
            <div class="item <?php if($i === 1){ echo 'active'; $i=2;}?>" >
              <img src="admin/img/carousel/<?php echo $key[image]?>" alt="">
              <div class="carousel-caption caption-right">
                <h4><?php echo $key[title]?></h4>
                <p><?php echo $key[text]?></p>
                <br>
              </div>
            </div>
          <?php
          endforeach;
          ?>
        </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="fa fa-chevron-left icon-prev"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="fa fa-chevron-right icon-next"></span>  
          </a>
        </div>        
      </div>
<div class="col-sm-9" data-effect="slide-right">
<h1>Kollej yangiliklari</h1>
  <ul class="media-list">
            
    <?php
      $numRows=2;
      $limit = (isset($_GET['page'])) ? ($_GET['page'])*$numRows : 0 ;
      $count = $Db->count_val('news');
      $news = $Db->get('news',$limit,$numRows);
      foreach($news as $value => $key):
    ?>                
        <li class="media">
          <a class="pull-left" href="#" style="width: 200px; height: 200px;">
            <img class="media-object img-thumbnail" data-src="holder.js/64x64" alt="" src="admin/img/news/<?=$key[image]?>"> 
          </a>
          <div class="media-body">
            <h5 class="media-heading"><a href="#">Sarlavha: <?=$key[title]?></a></h5>
            <p><?=$key[short]?></p>
          </div>
          <p>
            <a href="index.php?view=show&table=news&id=<?=$key[id]?>" class="btn btn-sm btn-primary">Davomi...</a>
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
        <a class="btn btn-sm btn-primary" href="index.php?view=news">Barcha yangiliklar</a>

<br>
<br>

</div>
<?php
  }else{

  }
?>