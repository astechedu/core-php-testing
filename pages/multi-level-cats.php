<?php

$con=mysqli_connect('localhost','root','','youtube');
$con=mysqli_query($con,"select * from city");


$arr[];
while($row=mysqli_fetch_assoc($res)) {
  $arr[$row['id']]['city']=$row['parent_id'];
  $arr[$row['id']]['parent_id']=$row['parent_id'];  
}
$html='';
function buildTreeView($arr,$parent,$level=0,$prelevel=-1) {
  global $html;
  foreach($arr as $id=>$data) {
     if($parent==$data['parent_id]){
        if($level>$prelevel) {
            if($html==''){
		$html .='<ul class="nav navbar-nav">';
            }else{
                $html .='<ul class="dropdown-menu">';
            }           
        }
        if($level==$prelevel){
           $html.='</li>';
        }
        $html.='<li><a href="#">'.$data['city'].'<span class="caret"></span></a>';
        if($level>$prelevel) {
           $prelevel=$level;
        }
        $level++;
        buildTreeView($arr,$id,$level,$prelevel);
        $level--;
     }
  }
  if($level==$prelevel) {  
    $html.='</li></ul>';
  }
  return $html;
}
?>


<div class="navbar-collapse collapse">
   <?php
      echo buildTreeView($arr,0);
    ?>
</div>