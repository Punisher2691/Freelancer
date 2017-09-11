<?php 
class Row
{
    public $name;
    public $deadline;
    public $wage;
    public $hours;
    public $comments;
}

for ($i=0 ; $i<=3 ; $i++) {

    $row = new Row();
    $row->name = $i.'contract';
    $row->deadline = "2017-09-0".$i*2;
    $row->wage = 523+$i*5+1;
    $row->hours = "04:45";
    $row->comments = "fd";

    $rows[] = $row;
}

/*
if (isset($_POST['contractName']) && isset($_POST['deadline'])) {
    $row = new Row();
    $row->contractName = $_POST['contractName'];
    $row->deadline = $_POST['deadline'];
    $row->wage = $_POST['wage'];
    $row->hours =  $_POST['hours'];
    $row->comments =  $_POST['comments'];
}
*/ 
?>

<?php require('header.php'); ?>

<?php require('menu.php'); ?>

<article>

    
<?php require('fillform.php'); ?>


<!--<a href="fillform.php" ><button id="add-new-button">+</button></a>-->
    
<button id="add-new-button" onclick="showHide()">+</button>

<div id="displayForm">    
    <?php  
    if ( isset( $_POST["submitButton"] ) ) {
      processForm();
    } else {
      displayForm( array() );
    }
    ?> 
</div>
    
<script>
    function showHide() {
        var x = document.getElementById('displayForm');
        if (x.style.display === 'none') {
            x.style.display = 'block';
        } else {
            x.style.display = 'none';
        }
    }    
</script>

<?php require('contractTable.php'); ?>



	    <style type="text/css">
            
        body {
            background-color: #E3E1ED; 
            color: #B1AEBD;
        }   
            
       
        #add-new-button {
             width: 70px;
             height: 70px;
             background-color: #51649E;
             border-radius: 50%;
            border: none;
            margin-bottom: 10px;
            color: #E3E1ED;
            font-size: 36pt;
             
        }
        
        #add-new-button:hover {
             background-color: #F2666F;
             -ms-transform: rotate(90deg); /* IE 9 */
             -webkit-transform: rotate(90deg); /* Safari */
             transform: rotate(90deg);
             -moz-transition: all 0.3s ease-in;    /* Firefox */
             -webkit-transition: all .3s ease-in;  /* WebKit */
             -o-transition: all 0.3s ease-in;      /* Opera */
             -ms-transition: all 0.3s ease-in;     /* Explorer */
             transition: all 0.3s ease-in;         /* Standard */
             
        }
            
            
    </style>
      

</article>

<script src="js/close_menu.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js'></script>

<script src="js/index.js"></script>
	
<?php require('footer.php'); ?>