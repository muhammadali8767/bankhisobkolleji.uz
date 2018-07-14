<div class="col-sm-3">

  <div class="col-sm-14">
            <ul class="nav nav-tabs nav-stacked">

              <li><a href="index.php?view=about">Maktab haqida</a></li>
              <li><a href="index.php?view=spirituality">Ma'naviy-ma`rifiy ishlar</a></li>
              <li><a href="index.php?view=teachers">Maktab o`quvchilari</a></li>
              
            </ul>
          </div>

  <!--<div class="panel panel-primary" id="panels" data-effect="helix">
     <div align="center" class="panel-heading">Tiziga kirish</div>
       <div class="panel-body"><form class="form-horizontal" method="post" action="">
              <div class="ss">
              <div class="form-group">
                
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="login" required placeholder="Login">
                </div>
              </div>
              <div class="form-group">
              
                <div class="col-sm-12">
                  <input type="password" class="form-control" name="password" required placeholder="Password">
                </div>
              </div>
              
              <div class="form-group">
                <div  class="col-sm-3">
                  <button  type="submit" class="btn btn-primary" name="ok">Kirish</button>
                </div>
                <div  class="col-sm-9">
                  <button  type="submit" class="btn btn-primary" name="">Ro`yxatdan o`tish</button>
                </div>

              </div>
              <br>
            </form> 



              </div> 

            </div>        
          </div>-->
      

     <div class="panel panel-primary" id="panels" data-effect="helix">
       <div align="center" class="panel-heading"></div>
            <div class="panel-body">
             <table id="calendar2">
  <thead>
    <tr><td>&laquo;<td colspan="5"><td>&raquo;
    <tr><td>Du<td>Se<td>Cho<td>Pa<td>Ju<td>Sha<td>Ya
  <tbody>
</table>

<script>
function Calendar2(id, year, month) {
var Dlast = new Date(year,month+1,0).getDate(),
    D = new Date(year,month,Dlast),
    DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
    DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
    calendar = '<tr>',
    month=["Yanvar","Fevral","Mart","Aprel","May","Iyun","Iyul","Avgust","Sentabr","Oktabr","Noyabr","Dekabr"];
if (DNfirst != 0) {
  for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
}else{
  for(var  i = 0; i < 6; i++) calendar += '<td>';
}
for(var  i = 1; i <= Dlast; i++) {
  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
    calendar += '<td class="today">' + i;
  }else{
    calendar += '<td>' + i;
  }
  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
    calendar += '<tr>';
  }
}
for(var  i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
document.querySelector('#'+id+' tbody').innerHTML = calendar;
document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {  // С‡С‚РѕР±С‹ РїСЂРё РїРµСЂРµР»РёСЃС‚С‹РІР°РЅРёРё РјРµСЃСЏС†РµРІ РЅРµ "РїРѕРґРїСЂС‹РіРёРІР°Р»Р°" РІСЃСЏ СЃС‚СЂР°РЅРёС†Р°, РґРѕР±Р°РІР»СЏРµС‚СЃСЏ СЂСЏРґ РїСѓСЃС‚С‹С… РєР»РµС‚РѕРє. РС‚РѕРі: РІСЃРµРіРґР° 6 СЃС‚СЂРѕРє РґР»СЏ С†РёС„СЂ
    document.querySelector('#'+id+' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
}
}
Calendar2("calendar2", new Date().getFullYear(), new Date().getMonth());
// РїРµСЂРµРєР»СЋС‡Р°С‚РµР»СЊ РјРёРЅСѓСЃ РјРµСЃСЏС†
document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(1)').onclick = function() {
  Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)-1);
}
// РїРµСЂРµРєР»СЋС‡Р°С‚РµР»СЊ РїР»СЋСЃ РјРµСЃСЏС†
document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(3)').onclick = function() {
  Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)+1);
}
</script>
 
            </div>
       </div>



     <!--<div class="panel panel-primary" id="panels" data-effect="helix">
       <div align="center" class="panel-heading">Hamkorlar</div>
            <div class="panel-body">
              
              <p><a href="Tatu.uz"> Tuit.uz</a> </p>
              <p><a href="Ziyonet.uz"> Ziyonet.uz</a></p>  

            </div>
</div>


       
    <div class="panel panel-primary" id="panels" data-effect="helix">
            <div class="panel-body">

        <div class="form-group">
                <div  class="col-sm-3">
                  <button  type="submit" class="btn btn-primary" name="ok">Chiqish</button>
                </div>
              
                <div class="col-sm-1"></div>
               <div  class="col-sm-6">
                  <button  type="submit" class="btn btn-primary" name="ok">Saytga o`tish</button>
                </div>
          </div>
</div>
</div>
-->
     </div>
