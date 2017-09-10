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


<!--
	<section id="welcome"> 
		<p> {{ message }} </p>
	</section>

	<section id="example">
	  	<example></example>
	</section>

	<script>
		new Vue ({
			el: '#welcome',
			data: {
				message: "Accounting made easy"
			}
		})

		// register
		Vue.component('example', {
		  template: '<div>why i need this?...</div>'
		})
		// create a root instance
		new Vue({
		  el: '#example'
		})
	</script>

-->

<?php require('fillform.php'); ?>
 
<a href="fillform.php" ><button id="add-new-button">+</button></a>

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
      




	
<?php require('footer.php'); ?>