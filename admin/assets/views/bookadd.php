<div class="col-sm-1"></div>
<div class="col-sm-9 col-lg-9">
  <div class="panel panel" id="panels" data-effect="helix">
    <div class="panel-heading"><p align="center">Kitob qo`shish</p></div>
    <div class="panel-body">
      <div class="col-sm-12">
        <form method="post"  action="post.php" enctype="multipart/form-data">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <div class="form-group has-success has-feedback">
              <input type="text" class="form-control" id="inputSuccess2" name="name" required placeholder="Kitob nomi:">
              <span class="fa fa-check form-control-feedback"></span>
            </div>
            <div class="form-group has-success has-feedback">
              <input type="text" class="form-control" id="inputSuccess2" name="author" required placeholder="Kitob mualifi:">
              <span class="fa fa-check form-control-feedback"></span>
            </div>
            <div class="form-group has-success has-feedback">
              <textarea type="text" class="form-control"  placeholder="Kitob haqida qisqacha ma`lumot:" name="description" required rows="10"></textarea>
            </div>                       
            <div class="form-group has-success has-feedback">
             <p>Rasm yuklash rasm nomi Lotincha bo'lishi shart !</p>
             <input type="file"  name="image" id="image" required >
            </div>
            <div class="form-group has-success has-feedback">
             <p>Kitob  yuklash File  nomi Lotincha bo'lishi shart !</p>
             <input type="file"  name="book" id="book" required>
            </div>
            <input type="hidden"  name="path" id="path" value="img/books/">
            <input type="hidden"  name="bookPath" id="bookPath" value="books/">
            <input type="hidden"  name="table" id="table" value="books">
            <div class="form-group has-success has-feedback">
              <button type="submit" class="btn btn-primary "><i class="fa fa-check fa-fw"></i>Saqlash</button>
            </div>                     
          </div>
        </form>
      </div>   
    </div>
 </div>
</div>