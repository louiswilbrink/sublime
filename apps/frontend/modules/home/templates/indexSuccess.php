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
            <h1 style="display: inline; font-family: 'Strait' !important;">"<?= $problem->getTitle(); ?>"</h1><p style="display: inline;">  [<a href="/index.php?id=<?= $problem->getId()?>">delete</a>]</p>
          </div>
          <div style="margin-left: 30px;">
            <h3><?= $problem->getDescription(); ?><h3>
          </div>

          <!-- display solution -->
          <? $count = 1; ?>
          <? foreach ($solutions as $solution) : ?>
            
            <? if ($problem->getId() == $solution->getProblemId()) : ?>

              <div style="margin-left: 30px;">

                <p><?= $count . ".) " . $solution->getInstruction(); ?></p>
                <? $count++ ?>

              </div>

            <? endif; ?>

          <? endforeach; ?>

        <? endforeach; ?>

    </div>
</section>
</body>

</html>
