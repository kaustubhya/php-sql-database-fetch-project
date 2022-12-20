<?php include 'inc/header.php';
// we can use require and require once here too!!
?>

<?php

// $feedback = [

//   [
//     'id' => '1',
//     'name' => 'Sean Williams',
//     'email' => 'SuperSmoothsean@gmail',
//     'body' => 'PHP is okay'
//   ],

//   [
//     'id' => '2',
//     'name' => 'Mark Griffin',
//     'email' => 'MightyMark@gmail',
//     'body' => 'Everything is not okay'
//   ],

//   [
//     'id' => '3',
//     'name' => 'Seira Drillocks',
//     'email' => 'butchbabe@gmail',
//     'body' => 'Roses are red'
//   ],

// ];

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC); // ASSOC - associative array

?> 
   
    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class ="lead mt3"> There is no feedback</p>
      <?php endif; ?>


      <?php foreach($feedback as $item): ?>

    <div class="card my-3 w-75">
     <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class = "text-secondary mt-2">
        By <?php echo $item['name']; ?> on <?php echo $item ['date']; ?>
     </div>
   </div>
   <?php endforeach; ?>


  
   <?php include 'inc/footer.php'; ?>