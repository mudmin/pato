<body class="animsition">
<!-- Header -->
<header>
  <!-- Header desktop -->
  <div class="wrap-menu-header gradient1 trans-0-4">
    <div class="container h-full">
      <div class="wrap_header trans-0-3">
        <!-- Logo -->
        <div class="logo">
          <a href="<?=$us_url_root?>index.php">
            <img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/icons/logo.png" alt="IMG-LOGO" data-logofixed="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/icons/logo2.png">
          </a>
        </div>

        <!-- Menu -->
        <div class="wrap_menu p-l-45 p-l-0-xl">
          <nav class="menu">
            <ul class="main_menu">
              <li>
                <a href="<?=$us_url_root?>index.php">Home</a>
              </li>



                <?php if(isset($user) && $user->isLoggedIn()){ ?>
                  <li>
                    <a href="<?=$us_url_root?>users/account.php">Account</a>
                  </li>
                   <li>
                    <a href="<?=$us_url_root?>users/logout.php">Logout</a>
                  </li>
                <?php }else{ ?>
                  <li>
                    <a href="<?=$us_url_root?>users/login.php">Login</a>
                  </li>
                <?php } ?>

              <li>
                <a href="reservation.html">Reservation</a>
              </li>

              <li>
                <a href="gallery.html">Gallery</a>
              </li>

              <li>
                <a href="about.html">About</a>
              </li>

              <li>
                <a href="blog.html">Blog</a>
              </li>

              <li>
                <a href="contact.html">Contact</a>
              </li>
            </ul>
          </nav>
        </div>

        <!-- Social -->
        <div class="social flex-w flex-l-m p-r-20">
          <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

          <button class="btn-show-sidebar m-l-33 trans-0-4"></button>
        </div>
      </div>
    </div>
  </div>
</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="<?=$us_url_root?>index.php" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
        <?php if(isset($user) && $user->isLoggedIn()){ ?>

            <a href="<?=$us_url_root?>users/account.php" class="txt19">Account</a>


            <a href="<?=$us_url_root?>users/logout.php" class="txt19">Logout</a>

           <?php }else{ ?>
            <a href="<?=$us_url_root?>users/login.php" class="txt19">Login</a>
              <?php } ?>
			</li>

			<li class="t-center m-b-13">
				<a href="gallery.html" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.html" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="blog.html" class="txt19">Blog</a>
			</li>

			<li class="t-center m-b-33">
				<a href="contact.html" class="txt19">Contact</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="reservation.html" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Reservation
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
					<img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-thumb-01.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
					<img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-thumb-02.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
					<img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-thumb-03.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
					<img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-thumb-05.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
					<img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-thumb-06.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
					<img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-thumb-07.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
					<img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-thumb-09.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
					<img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-thumb-10.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
					<img src="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/photo-gallery-thumb-11.jpg" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/slide1-01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Pato Place
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
              <?php if(isset($user) && $user->isLoggedIn()){ ?>

                  <a href="<?=$us_url_root?>users/account.php" class="btn1 flex-c-m size1 txt3 trans-0-4">Account</a>


                  <a href="<?=$us_url_root?>users/logout.php" class="btn1 flex-c-m size1 txt3 trans-0-4">Logout</a>

                 <?php }else{ ?>
                  <a href="<?=$us_url_root?>users/login.php" class="btn1 flex-c-m size1 txt3 trans-0-4">Login</a>
                    <?php } ?>
									</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/master-slides-02.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Pato Place
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
              <?php if(isset($user) && $user->isLoggedIn()){ ?>

                  <a href="<?=$us_url_root?>users/account.php" class="btn1 flex-c-m size1 txt3 trans-0-4">Account</a>


                  <a href="<?=$us_url_root?>users/logout.php" class="btn1 flex-c-m size1 txt3 trans-0-4">Logout</a>

                 <?php }else{ ?>
                  <a href="<?=$us_url_root?>users/login.php" class="btn1 flex-c-m size1 txt3 trans-0-4">Login</a>
                    <?php } ?>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/master-slides-01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Pato Place
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<a href="<?=$us_url_root?>users/login.php" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>


<?php
    if(isset($_GET['err'])){
      err("<font color='red'>".$err."</font>");
    }

    if(isset($_GET['msg'])){
      err($msg);
    }
