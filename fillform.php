<?php require('header.php'); ?>
<?php require('menu.php'); ?>

	    <style type="text/css">
            
        body {
            background-color: #E3E1ED; 
            color: #B1AEBD;
        }   
            
        .error { 
            color: red; 
            padding: 0.2em; 
        }
        
        label { 
            display: block; 
            float: left; 
            clear: both; 
            text-align: left; 
            margin: 15px 5px 0 0; 
            width: 250px;
        }
        
        input, textarea { 
            width: 250px;  
            border: none;
            border-radius: 5px;
            min-height: 30px;
            margin: 3px;
            
        }  
            
            form {
                background-color: #F1EFF7;
                margin: 20px;
                border-radius: 5px;
            }
            
            .input-fields {
                margin: auto;
                width: 250px;
                
            }
    </style>
      
<?php

if ( isset( $_POST["submitButton"] ) ) {
  processForm();
} else {
  displayForm( array() );
}

function validateField( $fieldName, $missingFields ) {
  if ( in_array( $fieldName, $missingFields ) ) {
    echo ' class="error"';
  }
}

function setValue( $fieldName ) {
  if ( isset( $_POST[$fieldName] ) ) {
    echo $_POST[$fieldName];
  }
}

function processForm() {
  $requiredFields = array( "contractName", "deadline");
  $missingFields = array();

  foreach ( $requiredFields as $requiredField ) {
    if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {
      $missingFields[] = $requiredField;
    }
  }

  if ( $missingFields ) {
    displayForm( $missingFields );
  } else { 
    //---saving to txt    
            $data = $_POST['contractName']."\r\n".
                    $_POST['deadline']."\r\n".
                    $_POST['hours']."\r\n".
                    $_POST['wage']."\r\n".
                    $_POST['comments']."\r\n".
                    "---"."\r\n";
            $ret = file_put_contents('contracts.txt', $data, FILE_APPEND | LOCK_EX);
            if($ret === false) {
                die('There was an error writing this file');
            }
            else {
                debug_to_console("Contract info was saved to a file");
            }
    //---saving to txt 
    displayFormCompleted();
      
  }    
}

function displayForm( $missingFields ) {
?>
    <h1>Contract</h1>

    <?php if ( $missingFields ) { ?>
    <p class="error">Please complete the fields highlighted below </p> 
    <?php debug_to_console("The form was filled incorectly");
    } else { ?>
    <p></p>
    <?php } ?>

    <form action="index.php" method="post" <?php if ($missingFields) { echo "class='animated jello'";}?>  >
      <section class="input-fields" >

        <label for="contractName"<?php validateField( "contractName", $missingFields ) ?>>Contract Name *</label><br/>
        <input type="text" name="contractName" id="contractName" value="<?php setValue( "contractName" ) ?>" /> <br />

        <label for="deadline"<?php validateField( "deadline", $missingFields ) ?>> Deadline * </label><br />
        <input type="date" name="deadline" id="deadline" value="<?php setValue( "deadline" ) ?>" /> <br />
          
        <label for="hours"<?php validateField( "hours", $missingFields ) ?>> Hours </label><br />
        <input type="time" name="hours" id="hours" value="<?php setValue( "hours" ) ?>" /> <br />
          
        <label for="wage"<?php validateField( "wage", $missingFields ) ?>> Wage </label><br />
        <input type="number" name="wage" id="wage" value="<?php setValue( "wage" ) ?>" /> <br />
           
        <label for="comments">Comments</label><br />
        <textarea name="comments" id="comments" rows="4" cols="50"><?php setValue( "comments" ) ?></textarea> <br />
          

          
          <style>
              
              #submitButton {
                  margin: 20px;;
                  padding: 15px 30px 15px 30px;
                  background-color: #658F5D;
                  border: 0px;
                  color: #fff;
                  border-radius: 5px;
                  width:  auto; 
                  
              }
              
              #submitButton:hover {
                  background-color: #fce5ab;
                  -moz-transition: all 0.3s ease-in;    /* Firefox */
                    -webkit-transition: all .3s ease-in;  /* WebKit */
                    -o-transition: all 0.3s ease-in;      /* Opera */
                    -ms-transition: all 0.3s ease-in;     /* Explorer */
                    transition: all 0.3s ease-in;         /* Standard */
              }
              
              #addsection {
                  text-align: center;
              }
             
          </style>
          
      
            <section style="clear: both;" id="addsection" >
              <input type="submit" name="submitButton" id="submitButton" class="buttonstyle" value="ADD"/>
            </section>

      </section>
    </form>
          
      
<?php
}
 
function debug_to_console( $data ) {

		if ( is_array( $data ) )
			$output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
		else
			$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

		echo $output;
}   

function displayFormCompleted() {   
    debug_to_console("Element was added to the table");
    
}
?>
      
      












