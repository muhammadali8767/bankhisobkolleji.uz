<div class="col-sm-9" data-effect="slide-right">
<h1>Qidiruv natijasi</h1>
  <ul class="media-list">            
    <?php
	if(isset($_POST['search'])){
	
		$search = $_POST['search'];
	  $result = $Db->searching($search);
	  if(!$result)
	  {
		echo "<h4>Hech narsa topilmadi. Iltimos qayta urinib ko'ring</h4>";  
	  }
	  foreach($result as $value => $key):
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
	}
	else{
		if(true)
	  {
		echo "<h3>Hech narsa topilmadi. Iltimos qayta urinib ko'ring</h3>";  
	  }
	}
	
    ?>                
  </ul>
</div>
