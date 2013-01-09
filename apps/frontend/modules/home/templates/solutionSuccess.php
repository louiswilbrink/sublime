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
    <?= $form['code']->render(); ?>
    </div>
    <div class="control-group">
    <button type="submit" class="btn">Submit</button>
    </div>
  </form>

  <h2>Instructions so far</h2>
  <? $count = 1; ?>
  <? foreach($solutions as $solution) : ?>

    <? $solutionStr = $count . ".) "; ?>

    <? if ($solution->getInstructionTypeId() == InstructionType::CODE) : ?>
     
       <p><?= $solutionStr ?><code><?= $solution->getInstruction(); ?></code></p>
    
    <? else : ?>

      <p><?= $solutionStr . $solution->getInstruction(); ?></p>

    <? endif ?>
    <? $count++ ?>

  <? endforeach; ?>

  <h4><a href="<?= url_for("@homepage") ?>">I've solved it!</a></h4>

</div>
</section>
</body>

</html>
