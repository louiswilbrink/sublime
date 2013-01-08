<html>

<body>
<section class="container p-container">
<div class="row-fluid p-row-fluid">
  <p style="margin-top: 10px"><?= "[" . $problem->getId() . "] Problem: " . $problem->getTitle() ?></p>

  <h2>Add your solution:</h2>

  <form class="form-horizontal" id="solution_form" action="" method="post">
    
    <div class="control-group">
    <?= $form['instruction']->renderRow(array('class' => 'p-description')); ?>
    </div>
    <div class="control-group">
    <button type="submit" class="btn">Submit</button>
    </div>
  </form>
  <h2>Instructions so far</h2>
  <? $step = 1; ?>
  <? foreach($solutions as $solution) : ?>

     <p><?= "$step.) " . $solution->getInstruction() ?></p>
     <? $step++ ?>

  <? endforeach; ?>

  <h4><a href="<?= url_for("@homepage") ?>">I've solved it!</a></h4>

</div>
</section>
</body>

</html>
