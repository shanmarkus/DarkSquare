<nav class="navbar navbar-custom" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header pad-top-20">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Beranda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav pad-top-20">
        <li <?php if($selected_tab=="portfolio")echo "class='active'"?>><a href="<?php echo PATH?>galeri" class="active">Portfolio</a></li>
        <li <?php if($selected_tab=="blog")echo "class='active'"?>><a href="<?php echo PATH?>blog">Blog</a></li>
        <li <?php if($selected_tab=="produk")echo "class='active'"?>><a href="<?php echo PATH?>product">Produk</a></li>
      </ul>

      <!--       Right Navigation -->
      <ul class="nav navbar-nav navbar-right">
        <li><img src="<?php echo IMAGES_URL?>logo_1.png"></li>
      </ul>
    </li>
  </ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>