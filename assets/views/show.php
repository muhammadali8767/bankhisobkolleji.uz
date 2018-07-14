<?php
$table = isset($_GET['table']) ? $_GET['table'] : null ;
$id = isset($_GET['id']) ? $_GET['id'] : null ;
$Db->where('id',$id);
$result = $Db->get($table,null,null,null,true);
?>
<div class="col-sm-9" data-effect="slide-right">
          <ul class="media-list">
            
              <li class="media">
              <a class="pull-left" href="#" style="width: 200px; height: 200px;">
                <img class="media-object img-thumbnail" data-src="holder.js/64x64" alt="" src="admin/img/news/<?=$result[0][image]?>"> 
              </a>
              <div class="media-body">
                <h5 class="media-heading"><a href="#">Sarlavha: <?=$result[0][title]?></a></h5>
                <p><?=$result[0][text]?></p>
              </div>
              
            </li>

             


</ul>
            
</div>
