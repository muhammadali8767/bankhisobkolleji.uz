      <div class="col-sm-1"></div>
      <div class="col-sm-9 col-lg-9">
          <div class="panel panel" id="panels" data-effect="helix">
            <div class="panel-heading"><p align="center">Corsel qo`shish</p>
            </div>
            <div class="panel-body"><div class="col-sm-12">
            <form method="post" action="post.php" enctype="multipart/form-data">
           <div class="col-sm-1"></div>
          <div class="col-sm-10">
            
                <div class="form-group has-success has-feedback">
              <input type="text" class="form-control"  placeholder="Mavzu:" name="title" required>
            </div>
            <div class="form-group has-success has-feedback">
              <textarea type="text" class="form-control"  name="short" required rows="3" placeholder="Qisqacha sharhi:"></textarea>
              
            </div>
            <div class="form-group has-success has-feedback">
              <textarea type="text" class="form-control"  placeholder="Mavzu haqida qisqacha ma`lumot:" name="text" required rows="5"></textarea>
            </div> 
                  
               <div class="form-group has-success has-feedback">

               <p>Rasm yuklash rasm nomi Lotincha bo'lishi shart !</p>
             <input type="file"  name="image" id="image" required >
               </div>

                  <input type="hidden"  name="path" id="path" value="img/carousel/">
                  <input type="hidden"  name="table" id="table" value="carousel">
               <div class="form-group has-success has-feedback">
                 <button type="submit" class="btn btn-primary "> <i class="fa fa-check fa-fw"></i>Saqlash</button></div>                     
               </form>
              </div>
             </div>   
           </div>
         </div>
       </div>

