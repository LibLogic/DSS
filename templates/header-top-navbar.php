<header class="jumbotron">

  <div class="header-box clearfix">
        <img class="img-responsive main-image" src="/wp/wp-content/themes/dssri/assets/img/logo.jpg"/>

    <div class="language"><a href="/">English</a> | <a href="espanol">Espanol</a></div>

      <div class="logo-box-outer col-sm-14 col-sm-offset-1">
        <div class="logo-box col-sm-15">
          <img class="img-responsive logo-image" src="/wp/wp-content/themes/dssri/assets/img/dssri.png"/>
      
        <div class="logo-box-text col-sm-9">
          <h1>Down Syndrome Society of Rhode Island</h1>
          <h2>More alike than different</h2> 
        </div> <!-- ./ logo-box-text -->

        <div class="donate-button"><a href="/join">Join</a> | <a href="/donate">Donate</a></div>

        </div> <!-- ./logo-box -->
      </div> <!-- ./logo-box-outer -->
  </div> <!-- ./header box -->


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
