<html>

<body>

<section class="container p-container">
<div class="row-fluid p-row-fluid">
    <h4>Don't let history repeat itself</h4>
    <form class="form-horizontal" id="problem_form" action="" method="post">
      <div class="control-group">
      <?= $form['title']->renderLabel(NULL, array('class' => 'p-title-label')); ?>
      <?= $form['title']->render(array('class' => 'p-title')); ?>
      <?= $form['description']->renderRow(array('class' => 'p-description')); ?>
      </div>
      <div class="control-group">
      <button type="submit" class="btn">Submit</button>
      </div>
    </form>
</div>
</section>

</body>

</html>
