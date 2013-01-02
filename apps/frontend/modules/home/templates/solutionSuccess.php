<html>

<body>
<div class="container top-margin-50">
  <div class="hero-unit">
  <p><?= $problem->getId() . " | " . $problem->getTitle() ?></p>

  <h2>Add your solution:</h2>

  <form id="solution_form" action="" method="post">
    
    <?= $form->render(); ?>

    <button type="submit" class="btn">Submit</button>
  </form>
  </div>

  <h2>Instructions so far</h2>
  <? foreach($solutions as $solution) : ?>
     <p>
  <?= $solution->getStep() . " | " . $solution->getInstruction() . " | " . $solution->getInstructionTypeId() ?>
     </p>

  <? endforeach; ?>
</div>
</body>

</html>
