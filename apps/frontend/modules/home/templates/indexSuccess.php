<!DOCTYPE html>
<html lang="en">
<link href='http://fonts.googleapis.com/css?family=Strait' rel='stylesheet' type='text/css'>
<body>

<section class="container p-container">

    <div class="row-fluid p-row-fluid" style="width: 920px">
      <h2 style="float: right; padding-right: 20px;">Fix Feed</h2>

      <div class="display-feed" style="margin-top: 20px">

        <? foreach($problems as $problem) : ?>

          <!-- display problem -->
          <div style="width: 800px;">
            <span style="display: inline-block; max-width: 700px"><h1 style="font-family: 'Strait' !important;">"<?= $problem->getTitle(); ?>"</h1></span><span style="margin-left: 10px; display: inline-block; vertical-align: top;"> [<a href="/index.php?id=<?= $problem->getId()?>">delete</a>]</span>
          </div>
          <div style="margin-left: 30px;">
            <h3><?= $problem->getDescription(); ?><h3>
          </div>

          <!-- display solution -->
          <? $count = 1; ?>
          <? foreach ($solutions as $solution) : ?>
            
            <? if ($problem->getId() == $solution->getProblemId()) : ?>

              <div style="margin-left: 30px;">

                <? $solutionStr = $count . ".) "; ?>

                <? if ($solution->getInstructionTypeId() == InstructionType::CODE) : ?>
                 
                   <p><?= $solutionStr ?><code><?= $solution->getInstruction(); ?></code></p>
                
                <? else : ?>

                  <p><?= $solutionStr . $solution->getInstruction(); ?></p>

                <? endif ?>
                <? $count++ ?>

              </div>

            <? endif; ?>

          <? endforeach; ?>

        <? endforeach; ?>

    </div>
</section>
</body>

</html>
