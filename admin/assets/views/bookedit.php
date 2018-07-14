    <?php
      $id = isset($_GET['id']) ? $_GET['id'] : null ;      
      $Db->where('id',$id);
      $carousel = $Db->get('carousel');
    ?><div class="col-sm-1"></div>
<div class="col-sm-9 col-lg-9">
  <div class="panel panel" id="panels" data-effect="helix">
    <div class="panel-heading"><p align="center">Kitob qo`shish</p></div>
    <div class="panel-body">
      <div class="col-sm-12">
        <form method="post"  action="edit.php" enctype="multipart/form-data">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <div class="form-group has-success has-feedback">
            <label for="title">Sarlavha:</label>
              <input type="text" class="form-control" id="inputSuccess2" name="name" value="<?=$carousel[0][title]?>">
              <span class="fa fa-check form-control-feedback"></span>
            </div>
            <div class="form-group has-success has-feedback">
              <input type="text" class="form-control" id="inputSuccess2" name="author" value="<?=$carousel[0][title]?>">
              <span class="fa fa-check form-control-feedback"></span>
            </div>
            <div class="form-group has-success has-feedback">
              <input type="text" class="form-control"  value="<?=$carousel[0][title]?>" name="description">
            </div>                       
            <div class="form-group has-success has-feedback">
             <p>Rasm yuklash rasm nomi Lotincha bo'lishi shart !</p>
             <input type="file"  name="image" id="image"  >
            </div>
            <div class="form-group has-success has-feedback">
             <p>Kitob  yuklash File  nomi Lotincha bo'lishi shart !</p>
             <input type="file"  name="book" id="book" >
            </div>
            <input type="hidden"  name="path" id="path" value="img/books/">
            <input type="hidden"  name="bookPath" id="bookPath" value="books/">
            <input type="hidden"  name="table" id="table" value="books">
            <input type="hidden"  name="id" id="id" value="<?=$carousel[0][id]?>">
            <input type="hidden"  name="image" id="image" value="<?=$carousel[0][image]?>">
            <input type="hidden"  name="book" id="book" value="<?=$carousel[0][book]?>">
            <div class="form-group has-success has-feedback">
              <button type="submit" class="btn btn-primary "><i class="fa fa-check fa-fw"></i>Saqlash</button>
            </div>                     
          </div>
        </form>
      </div>   
    </div>
 </div>
</div>