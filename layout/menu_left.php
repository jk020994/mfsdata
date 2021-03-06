<?php 
session_start();
if (empty($_SESSION['login_user'])){
	header("location: /");
} else {
?>
<div class="col-md-3 left_col">
	<div class="left_col scroll-view">

		<div class="navbar nav_title" style="border: 0;">
			<a href="/" class="site_title"><i class="fa fa-paw"></i> 
			<img src="images/logo_white.png" height="50" width="auto" alt="Chi nhánh Mobifone Service Hải Phòng">
			</a>
		</div>
		<div class="clearfix"></div>

		<!-- menu prile quick info -->
		<div class="profile">
			<div class="profile_pic">
				<img src="images/img.jpg" alt="..." class="img-circle profile_img">
			</div>
			<div class="profile_info">
				<span>Xin chào,</span>
				<h2><?echo $_SESSION['login_user']?></h2>
			</div>
		</div>
		<!-- /menu prile quick info -->

		<br />

		<!-- sidebar menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

			<div class="menu_section">
				<h3><center><?php echo $_SESSION['login_fullname']?></center></h3>
				<ul class="nav side-menu">
					<li><a href="main.php"><i class="fa fa-home"></i> Trang chủ</a>
					</li>
                                        <li><a href="customer_care.php"><i class="fa fa-area-chart"></i> Khảo sát khách hàng</a>
					</li>
					<!--
					<li><a><i class="fa fa-edit"></i> Cập nhật công việc <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="taocongviec">Tạo công việc mới</a>
							</li>
							<li><a href="congviecdagiao">Công việc đã giao</a>
							</li>
						</ul>
					</li>
					<li><a><i class="fa fa-desktop"></i> Quản lý công việc<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="dangxuly">Công việc đang xử lý</a>
							</li>
							<li><a href="hoanthanh">Công việc đã hoàn thành</a>
							</li>
							<li><a href="khonghoanthanh">Công việc không hoàn thành</a>
							</li>
						</ul>
					</li>
					-->
					<!--
					<li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="general_elements.html">General Elements</a>
							</li>
							<li><a href="media_gallery.html">Media Gallery</a>
							</li>
							<li><a href="typography.html">Typography</a>
							</li>
							<li><a href="icons.html">Icons</a>
							</li>
							<li><a href="glyphicons.html">Glyphicons</a>
							</li>
							<li><a href="widgets.html">Widgets</a>
							</li>
							<li><a href="invoice.html">Invoice</a>
							</li>
							<li><a href="inbox.html">Inbox</a>
							</li>
							<li><a href="calender.html">Calender</a>
							</li>
						</ul>
					</li>
					<li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="tables.html">Tables</a>
							</li>
							<li><a href="tables_dynamic.html">Table Dynamic</a>
							</li>
						</ul>
					</li>
					<li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="chartjs.html">Chart JS</a>
							</li>
							<li><a href="chartjs2.html">Chart JS2</a>
							</li>
							<li><a href="morisjs.html">Moris JS</a>
							</li>
							<li><a href="echarts.html">ECharts </a>
							</li>
							<li><a href="other_charts.html">Other Charts </a>
							</li>
						</ul>
					</li>
					-->
				</ul>
			</div>
			<!-- <div class="menu_section">
				<h3>Live On</h3>
				<ul class="nav side-menu">
					<li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="e_commerce.html">E-commerce</a>
							</li>
							<li><a href="projects.html">Projects</a>
							</li>
							<li><a href="project_detail.html">Project Detail</a>
							</li>
							<li><a href="contacts.html">Contacts</a>
							</li>
							<li><a href="profile.html">Profile</a>
							</li>
						</ul>
					</li>
					<li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
							<li><a href="page_404.html">404 Error</a>
							</li>
							<li><a href="page_500.html">500 Error</a>
							</li>
							<li><a href="plain_page.html">Plain Page</a>
							</li>
							<li><a href="login.html">Login Page</a>
							</li>
							<li><a href="pricing_tables.html">Pricing Tables</a>
							</li>

						</ul>
					</li>
					<li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
					</li>
				</ul>
			</div>
			-->
		</div>
		<!-- /sidebar menu -->

		<!-- /menu footer buttons -->
		<div class="sidebar-footer hidden-small">
			<a data-toggle="tooltip" data-placement="top" title="Settings">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="FullScreen">
				<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Lock">
				<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
			</a>
			<a data-toggle="tooltip" data-placement="top" title="Logout">
				<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
			</a>
		</div>
		<!-- /menu footer buttons -->
	</div>
</div>
<?php 
}
?>