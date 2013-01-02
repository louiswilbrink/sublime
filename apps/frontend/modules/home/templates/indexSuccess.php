<!DOCTYPE html>
<html lang="en">

<body>

<div class="container top-margin-50">

    <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h2>Fix Feed</h2>
      </div>

      <div class="display-feed">

        <? foreach($problems as $problem) : ?>

          <!-- display problem -->
          <div class="p-id-title">
            <span class="p-id">
            <? echo $problem->getId(); ?>
            </span>
            <span class="p-title">
            <? echo $problem->getTitle(); ?>
            </span>
          </div>

          <div class="p-descr">

            <span class="p-descr">
            <? echo $problem->getDescription(); ?>
            </span>

          <!-- display solution -->

          <? foreach ($solutions as $solution) : ?>
            
            <? if ($problem->getId() == $solution->getProblemId()) : ?>

              <div class="<? echo $solution->getInstructionTypeId(); ?>">

                <? echo $solution->getInstruction(); ?>

              </div>

            <? endif; ?>

          <? endforeach; ?>

        </div>
        <? endforeach; ?>

      </div>
</div>

</body>

</html>
