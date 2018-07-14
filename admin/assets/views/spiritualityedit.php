    <?php
      $id = isset($_GET['id']) ? $_GET['id'] : null ;      
      $Db->where('id',$id);
      $spirituality = $Db->get('spirituality',null,null,null,true);
    ?>
    <div class="col-sm-1"></div>
      <div class="col-sm-9 col-lg-9">
          <div class="panel panel" id="panels" data-effect="helix">
            <div class="panel-heading"><p align="center">Ma'naviy ishni o'zgartirish</p>
            </div>
            <div class="panel-body"><div class="col-sm-12">
            <form method="post"  action="edit.php" enctype="multipart/form-data">
           <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <div class="form-group has-success has-feedback">
              <label for="title">Sarlavha:</label>
              <input type="text" class="form-control" id="inputSuccess2" name="title"  value="<?=$spirituality[0][title]?>">
              
            </div>
            <div class="form-group has-success has-feedback">
              <label for="short">Qisqacha:</label>
              <input type="text" class="form-control"  name="short"  rows="3" value="<?=$spirituality[0][short]?>">
              
            </div>
            <div class="form-group has-success has-feedback">
              <label for="text">Matn:</label>
              <input type="text" class="form-control"  value="<?=$spirituality[0][text]?>" name="text"  rows="10">
            </div> 
                  
               <div class="form-group has-success has-feedback">

              <p><label for="image">Surat:</label></p> 
              <img src="img/spirituality/<?=$spirituality[0][image]?>" width="200px">
              
              <input type="file"  name="image"  >
               </div>
               <input type="hidden"  name="path" value="img/spirituality/">
                  <input type="hidden"  name="table" value="spirituality">
                  <input type="hidden"  name="id" value="<?=$spirituality[0][id]?>">
                  <input type="hidden"  name="image" value="img/spirituality/<?=$spirituality[0][image]?>">
                      
               <div class="form-group has-success has-feedback">
                 <button type="submit" class="btn btn-primary "> <i class="fa fa-check fa-fw"></i>Saqlash</button></div>                     
               </form>
              </div>
             </div>   
           </div>
         </div>
       </div>