<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Deadline</th> 
    <th>Hours</th>
    <th>Wage</th>
    <th>Comments</th>
  </tr>
    <?php 
    
    foreach ($rows as $row) {
        echo '<tr><td>'.$row->name.'</td><td>'.$row->deadline.'</td><td>'.$row->hours.'</td><td>'.$row->wage.' €</td><td>'.$row->comments.'</td></tr>';
    }
    ?>
    
<?php if ( isset( $_POST['contractName'] ) && isset( $_POST['deadline'] ) ) { ?>
  <tr>
    <td><?php echo $_POST['contractName']; ?></td>
    <td><?php echo $_POST['deadline']; ?></td> 
    <td><?php echo $_POST['hours']; ?></td>
    <td><?php echo $_POST['wage']." €"; ?></td>
    <td><?php echo $_POST['comments']; ?></td>
  </tr>
<?php } ?>     
</table>

<style> 
    table {
        border-collapse: collapse;
        border-radius: 5px;
    }

    th {
      text-align: left;
      margin: 20px;
        background-color: #51649E;
    }

    tr {
      background-color: #F1EFF7;
      border-radius: 5px;
      margin: 5px;
    }

    th, td {
      min-width: 70px;
      padding: 15px 20px;
    }
</style>



