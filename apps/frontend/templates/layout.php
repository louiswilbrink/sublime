<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?= url_for("@homepage") ?>">Fixes</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?= url_for("@homepage") ?>">Home</a></li>
              <li><a href="<?= url_for("@enter_problem") ?>">Enter a problem</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><!--container-->

    <?php echo $sf_content ?>

  </body>
</html>
