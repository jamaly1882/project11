
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Untitled Document</title>
<script src="../jquery/jquery.min.js" />
</script>



   <script >
 
$(document).ready(function(){
  $("#qq").click(function(){
    $("#rr").slideDown(5000);
  });
  $("#aa").click(function(){
    $("#rr").stop();
  });
});
</script>
<body>
<div id="qq">اقر هنا لتنزيل الصفحة</div>
<div id="rr">مرحبا</div>
<button id="aa">اوكي</button>
