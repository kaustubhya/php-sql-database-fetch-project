<?php include 'inc/header.php';
// we can use require and require once here too!!
?>

<?php

$feedback = [

  [
    'id' => '1',
    'name' => 'Sean Williams',
    'email' => 'SuperSmoothsean@gmail',
    'body' => 'PHP is okay'
  ],

  [
    'id' => '2',
    'name' => 'Mark Griffin',
    'email' => 'MightyMark@gmail',
    'body' => 'Everything is not okay'
  ],

  [
    'id' => '3',
    'name' => 'Seira Drillocks',
    'email' => 'butchbabe@gmail',
    'body' => 'Roses are red'
  ],

];

?>
   
    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class ="lead mt3"> There is no feedback</p>
      <?php endif; ?>

    <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>
   <?php include 'inc/footer.php'; ?>