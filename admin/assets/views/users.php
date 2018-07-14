
      <div class="col-sm-9">
    <div class="row">
      
          <div class="col-sm-12">
            <p class="lead text-muted">Foydalanuvchilar:</p>
            <table class="table table-bordered" data-effect="fade">
              <thead>
                <tr>
                  <th>#</th>
                  <th>E-maili</th>
                   <th>Login</th>
                  <th>Parol</th>
                  <th>Taxrerlash</th>
                </tr>
              </thead>
              <tbody>
              <?php $i=1;
              $users = $Db->get('users');
              foreach($users as $value => $key):
              ?>
                <tr>
                  <td><?=$i?></td>

                  <td><?=$key[email]?></td>
                   <td><?=$key[login]?></td>
                  <td><?=$key[password]?></td>
                  <td> 
                    
                      
                      <?php if ($key[email]=="muhammadali8767@gmail.com") {?>
                     <p class="btn btn-sm btn-danger">SUPER USER</p>
                     <?php }
                     else{ 
                     ?>
                      <p>
                      <a href="del.php?id=<?=$key[id]?>&c=users" class="btn btn-sm btn-danger"><i class="fa fa-times fa-fw"></i>O'chirish</a> 
                      <a href="index.php?view=show&id=<?=$key[id]?>&table=users" class="btn btn-sm btn-primary"></i>Ko'rish</a> 
                      </p>

                     <?php }?>
                        
                  </td>
                </tr>
              <?php 
              $i++;
              endforeach;
              //style="color: red; background-color: black; "
              ?>   

                
              </tbody>
            </table>            
          </div>
        </div>
      </div>
       <div class="col-sm-12">
<div class="col-sm-3"></div>
<div class="col-sm-3">
</div>
           <a href="index.php?view=useradd" class="btn btn-sm btn-primary">Foydalanuvchi qo'shish</a>
<br><br>
