    <?php
      $id = isset($_GET['id']) ? $_GET['id'] : null ;      
      $Db->where('id',$id);
      $carousel = $Db->get('carousel',null,null,null,true);
    ?>
          <div class="col-sm-1"></div>
      <div class="col-sm-9 col-lg-9">
          <div class="panel panel" id="panels" data-effect="helix">
            <div class="panel-heading"><p align="center">Karusel</p>
            </div>
            <div class="panel-body"><div class="col-sm-12">
            <form method="post" action="edit.php" enctype="multipart/form-data">
           <div class="col-sm-1"></div>
          <div class="col-sm-10">
            
                <div class="form-group has-success has-feedback">
              <label for="title">Sarlavha:</label>
              <input type="text" class="form-control"  value="<?=$carousel[0][title]?>" name="title" >
            </div>
            <div class="form-group has-success has-feedback">
              <label for="title">Qisqacha:</label>
              <input type="text" class="form-control"  value="<?=$carousel[0][short]?>" name="short" >
            </div>
            <div class="form-group has-success has-feedback">
              <label for="title">Matn:</label>
              <input type="text" class="form-control"  value="<?=$carousel[0][text]?>" name="text">
            </div> 
                  
               <div class="form-group has-success has-feedback">

              <p><label for="image">Surat:</label></p> 
              <img src="img/carousel/<?=$carousel[0][image]?>" width="200px">
              
              <input type="file"  name="image"  >
               </div>
               <input type="hidden"  name="path" value="img/carousel/">
                  <input type="hidden"  name="table" value="carousel">
                  <input type="hidden"  name="id" value="<?=$carousel[0][id]?>">
                  <input type="hidden"  name="image" value="img/carousel/<?=$carousel[0][image]?>">
                  <div class="form-group has-success has-feedback">
                 <button type="submit" class="btn btn-primary "> <i class="fa fa-check fa-fw"></i>Saqlash</button></div>                     
               </form>
              </div>
             </div>   
           </div>
         </div>
       </div>

