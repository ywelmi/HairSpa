<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <style type="text/css">
        fieldset {
      overflow: hidden
    }
    
    .some-class {
      float: left;
      clear: none;
    }
    
    .lbl {
      float: left;
      clear: none;
      display: block;
      padding: 0px 1em 0px 5px;
      margin-top: 12px;
    }
    
    input[type=radio],
    input.radio {
       
      float: left;
      clear: none;
      margin: 14px 0 0 18px;
    }
    </style>
</head>
<body>
     <div class="input-group mb-3" id="test">
            
             <label class="label" for="inputGroupSelect02">Ngày sử dụng </label>
           
           <select style="margin-left: 20px;height: 50px;font-size: 20px;" class="custom-select" id="inputGroupSelect02">
             <option selected>Chọn ngày </option>
             <option value="1">Hôm nay</option>
             <option value="2">Ngày mai</option>
             <option value="3">Ngày kia</option>
           </select>
         
            </div>
  
	
    <table style="font-size: 12px;" border="5" cellspacing="0" align="center" class="bg-light" >
        <!--<caption>Timetable</caption>-->
        <tr>
            <td align="center" height="30" 
                width="200">
                <b>Ngày/Ca</b></br>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>I<br>8:30-9:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>II<br>9:30-10:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>III<br>10:30-11:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>IV<br>11:30-12:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>V<br>12:30-13:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>VI<br>13:30-14:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>VII<br>14:30-15:30</b>
            </td>
            
        </tr>

        <tr id="nay" name="nay">
                <td align="center"  >
                <b>Hôm nay</b></td>
                
                <?php for($i=1;$i<8;$i++) {?>
                   <td align="center" > 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']== 'nay'): ?>
                        <br>
                        <br>    
                        <div class="text-center"><small style="color: red;">Đã có khách hàng</small></div>
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                            <br>
                            <br>
                             <fieldset>
                              <div class="some-class">
                                <input type="radio" class="radio" name="x" value="y" id="y" onclick="run(<?php echo $i; ?>,'nay')" />
                                <label class="lbl" for="y">Lựa chọn</label>
                                
                              </div>
                            </fieldset>
                       <?php endif ?>
                       <br>
        
                       </td>
                     <?php };?>
        </tr>
        <tr id="mai" name="mai" >
                <td align="center" height="20"  >
                <b>Ngày mai</b></td>
                
                <?php for($i=1;$i<8;$i++) {?>
                   <td align="center" height="20px"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']== 'mai'): ?>
                        <br>
                        <br>
                        <br>
                        <div class="text-center"><small style="color: red;">Đã có khách hàng</small></div>
                         <br>
                       
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                            <br>
                            <br>
                             <fieldset>
                              <div class="some-class">
                                <input type="radio" class="radio" name="x" value="y" id="y" onclick="run(<?php echo $i; ?>,'mai')" />
                                <label class="lbl" for="y">Lựa chọn</label>
                                
                              </div>
                            </fieldset>
                       <?php endif ?>
                       <br>
        
                       </td>
                     <?php };?>
        </tr>
        <tr id="kia" name="kia">
                <td align="center" height="20" >
                <b>Ngày kia</b></td>
                
                <?php for($i=1;$i<8;$i++) {?>
                   <td align="center" height="20px"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']== 'kia'): ?>
                        <br>
                        <br>
                        <br>
                        <div class="text-center"><small style="color: red;">Đã có khách hàng</small></div>
                         <br>
                       
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                        <br>
                            <br>
                             <fieldset>
                              <div class="some-class">
                                <input type="radio" class="radio" name="x" value="y" id="y" onclick="run(<?php echo $i; ?>,'kia')" />
                                <label class="lbl" for="y">Lựa chọn</label>
                                
                              </div>
                            </fieldset>
                       <?php endif ?>
                       <br>
        
                       </td>
                     <?php };?>
        </tr>
     </table>
     <br>
     <br>
     <br>
     <table style="font-size: 12px;" border="5" cellspacing="0" align="center" class="bg-light" font-size="12px">
        <!--<caption>Timetable</caption>-->
        <tr>
            <td align="center" height="30" 
                width="200">
                <b>Day/Period</b></br>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>VIII<br>15:30-16:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>IX<br>16:30-17:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>X<br>17:30-18:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>XI<br>18:30-19:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>XII<br>19:30-20:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>XIII<br>20:30-21:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>XIV<br>21:30-22:30</b>
            </td>
            
        </tr>
        <tr id="cnay" name="cnay">
                <td align="center" height="30" >
                <b>Hôm nay</b></td>
                <?php for($i=8;$i<15;$i++) {?>
                   <td align="center" height="30"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='nay'): ?>
                        <br>
                        <br>
                        <br>
                        <div class="text-center"><small style="color: red;">Đã có khách hàng</small></div>
                         <br>
                       
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                         <br>
                            <br>
                             <fieldset>
                              <div class="some-class">
                                <input type="radio" class="radio" name="x" value="y" id="y" onclick="run(<?php echo $i; ?>,'nay')" />
                                <label class="lbl" for="y">Lựa chọn</label>
                                
                              </div>
                            </fieldset>
                       <?php endif ?>
                       <br>
        
                       </td>
                     <?php };?>
        </tr>
        <tr id="cmai" name="cmai">
                <td align="center" height="30" >
                <b>Ngày mai</b></td>
                <?php for($i=8;$i<15;$i++) {?>
                   <td align="center" height="30"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='mai'): ?>
                        <br>
                        <br>
                        <br>
                        <div class="text-center"><small style="color: red;">Đã có khách hàng</small></div>
                         <br>
                       
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                         <br>
                            <br>
                             <fieldset>
                              <div class="some-class">
                                <input type="radio" class="radio" name="x" value="y" id="y" onclick="run(<?php echo $i; ?>,'mai')"/>
                                <label class="lbl" for="y">Lựa chọn</label>
                                
                              </div>
                            </fieldset>
                       <?php endif ?>
                       <br>
        
                       </td>
                     <?php };?>
        </tr>
        <tr id="ckia"name="ckia">
                <td align="center" height="30" >
                <b>Ngày kia</b></td>
                <?php for($i=8;$i<15;$i++) {?>
                   <td align="center" height="30"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='kia'): ?>
                        <br>
                        <br>
                        <br>
                        <div class="text-center"><small style="color: red;">Đã có khách hàng</small></div>
                         <br>
                       
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                         <br>
                            <br>
                             <fieldset>
                              <div class="some-class">
                                <input type="radio" class="radio" name="x" value="y" id="y" onclick="run(<?php echo $i; ?>,'kia')" />
                                <label class="lbl" for="y">Lựa chọn</label>
                                
                              </div>
                            </fieldset>
                       <?php endif ?>
                       <br>
        
                       </td>
                     <?php };?>
        </tr>
     </table>
      
 
      

</body>
<script type="text/javascript">
    
$(document).ready(function(){
            $("#nay").hide();
             $("#mai").hide();
             $("#kia").hide();
             $("#cnay").hide();
             $("#cmai").hide();
             $("#ckia").hide();
    $("select.custom-select").change(function(){
        var s = $(this).children("option:selected").val();
        if(s=='1'){
            $("#nay").show();
             $("#mai").hide();
             $("#kia").hide(); 
             $("#cnay").show();
             $("#cmai").hide();
             $("#ckia").hide();
          }
          if(s=='2'){
            $("#nay").hide();
             $("#mai").show();
             $("#kia").hide();
            $("#cnay").hide();
             $("#cmai").show();
             $("#ckia").hide();

          }
          if(s=='3'){
            $("#nay").hide();
             $("#mai").hide();
             $("#kia").show();
            $("#cnay").hide();
             $("#cmai").hide();
             $("#ckia").show();

          }
    
    });
    
});
  
</script>
</html>