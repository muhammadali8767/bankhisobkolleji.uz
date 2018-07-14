   <div class="col-sm-9">
   
<?php
$galery = $Db->get('galery');
foreach($galery as $value => $key):
?>                
      <div class="col-lg-6 col-sm-6 ">
        <div id="myCarouselV" class="carousel thumbnail fade">
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="item active">
                <img height="300px" width="auto" src="img/galery/<?=$key[image]?>" alt="">     
              <a href="del.php?id=<?=$key[id]?>&c=galery&path=img/galery/" class="btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i>O'chirish</a>   
          </div>
        </div>
      </div>
      </div>  
<?php
endforeach;
?>        

    </div>
      

 <div class="col-sm-12">
<div class="col-sm-3"></div>
<div class="col-sm-4">
</div>
           <a href="index.php?view=fotoadd" class="btn btn-sm btn-primary">Fotosurat qo'shish</a>
<br><br>
<!--<div class="col-sm-12">
<div class="col-sm-3"></div>
<div class="col-sm-3">

</div>
        <ul class="pagination">
          <li><a href="#">«</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li class="disabled"><a href="#">»</a></li>
        </ul>

 --> 
</div>
