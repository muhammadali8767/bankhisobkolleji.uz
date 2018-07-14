<?php
	if ($_GET['table']=='news') {
		$table = isset($_GET['table']) ? $_GET['table'] : null ;
		$id = isset($_GET['id']) ? $_GET['id'] : null ;
		$Db->where('id',$id);
		$result = $Db->get($table,null,null,null,true);
		?>
		<div class="col-sm-9" data-effect="slide-right">
		          <ul class="media-list">
		              <li class="media">
		              <a class="pull-left" href="#" style="width: 200px; height: 200px;">
		                <img class="media-object img-thumbnail"  style="float: left;" data-src="holder.js/64x64" alt="" src="../img/<?=$table?>/<?=$result[0][image]?>"> 
		              </a>
		                <h2 class="media-heading"><?=$result[0][title]?></h2>
		                <p style="text-align: left;"><?=$result[0][text]?></p>
		            </li>
		</ul>
		</div>
<?php
	}
	elseif ($_GET['table']=='posts') {
		$table = isset($_GET['table']) ? $_GET['table'] : null ;
		$id = isset($_GET['id']) ? $_GET['id'] : null ;
		$Db->where('id',$id);
		$result = $Db->get($table,null,null,null,true);
		?>
		<div class="col-sm-9" data-effect="slide-right">
		          <ul class="media-list">
		              <li class="media">
		                <h2 class="media-heading">Email: <?=$result[0][email]?></h2>
		                <p style="text-align: left;">Ismi: <?=$result[0][name]?></p>
		                <p style="text-align: left;">Familyasi: <?=$result[0][surname]?></p>
		                <p style="text-align: left;">Shahar: <?=$result[0][city]?></p>
		                <p style="text-align: left;">Fayl: <a download href="/post_files/<?=$result[0][file]?>"><?=$result[0][file]?></a></p>
		                <p style="text-align: left;">Xabar: <?=$result[0][text]?></p>
		            </li>
		</ul>
		</div>
<?php
	}
	elseif ($_GET['table']=='users') {
		$table = isset($_GET['table']) ? $_GET['table'] : null ;
		$id = isset($_GET['id']) ? $_GET['id'] : null ;
		$Db->where('id',$id);
		$result = $Db->get($table,null,null,null,true);
		?>
		<div class="col-sm-9" data-effect="slide-right">
		          <ul class="media-list">
		              <li class="media">
		                <p style="text-align: left;">Ismi: <?=$result[0][name]?></p>
		                <p style="text-align: left;">Familyasi: <?=$result[0][surname]?></p>
		                <p class="media-heading">Email: <?=$result[0][email]?></p>
		                <p style="text-align: left;">Login: <?=$result[0][login]?></p>
		                <p style="text-align: left;">Parol: <?=$result[0][password]?></p>
		            </li>
		</ul>
		</div>
<?php
	}
	elseif ($_GET['table']=='books') {
		$table = isset($_GET['table']) ? $_GET['table'] : null ;
		$id = isset($_GET['id']) ? $_GET['id'] : null ;
		$Db->where('id',$id);
		$result = $Db->get($table,null,null,null,true);
		?>
		<div class="col-sm-9" data-effect="slide-right">
		          <ul class="media-list">
		              <li class="media">
		                <p style="text-align: left;">Login: <?=$result[0][picture]?></p>		              
		                <p style="text-align: left;">Ismi: <?=$result[0][name]?></p>
		                <p style="text-align: left;">Familyasi: <?=$result[0][author]?></p>
		                <p style="text-align: left;">Parol: <?=$result[0][book]?></p>
		                <p class="media-heading">Email: <?=$result[0][deskription]?></p>
		            </li>
		</ul>
		</div>
<?php
	}
?>