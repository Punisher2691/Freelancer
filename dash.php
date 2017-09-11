<?php include 'header.php';?>


  <style>

div#load_screen{
width: 80px;
  height: 80px;
  border: 2px solid #f3f3f3;
  border-top: 3px  solid #f25a41;
  border-radius: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  animation: spin 1s infinite linear;
}

@keyframes spin{
  from{
    transform: rotate(0deg);
  }to{
    transform: rotate(360deg);
  }  
}

div#load_screen > div#loading{
  color:#FFF;
  width:120px;
  height:24px;
  margin: 300px auto;
}
</style>
<script>
window.addEventListener("load", function(){
  var load_screen = document.getElementById("load_screen");
  document.body.removeChild(load_screen);
});
</script>


<div id="load_screen"><div id="loading"></div></div>



    <?php include 'menu.php';?>

    <?php include 'content.php';?>



<script src="js/close_menu.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js'></script>

    <script src="js/index.js"></script>

<?php include 'footer.php';?>