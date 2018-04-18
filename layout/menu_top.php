<div class="top_nav">
<!-- top navigation -->
	<div class="nav_menu">
		<nav class="" role="navigation">
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="images/img.jpg" alt=""><?php echo $_SESSION['login_fullname']?>
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
						<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Thoát khỏi hệ thống</a>
						</li>
					</ul>
				</li>

				<li role="presentation" class="dropdown">
					<a href="https://mail.mfs-5.com/owa" class="dropdown-toggle info-number" target="_blank">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-green">E</span>
					</a>
				</li>
				
				<li class="">
					<a class="dropdown-toggle info-number">
					<?php
						echo ("Hôm nay, ngày ". date("d/m/Y"). " - Tuần ". date("W"));
					?>
					</a>
				</li>

			</ul>
		</nav>
	</div>

</div>