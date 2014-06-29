

<header class="jumbotron">
<!--  <div class="col-sm-12 col-sm-offset-2">
   <img src="../wp/wp-content/themes/roots/assets/img/dssri.png">
  </div>
  -->
   <img class="img-responsive" src="../wp/wp-content/themes/dssri/assets/img/logo2.jpg">

  <div class="navbar navbar-inverse navbar-static-top">
    <div class="container col-sm-offset-1 navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>  <!-- navbar-header -->
  </div> <!-- navbar -->
</header>  <!--  Jumbotron -->
