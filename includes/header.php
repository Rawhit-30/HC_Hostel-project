
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix">
		<a href="hostel mgmt PHP/hostel/main/index.php" class="logo" style="font-size:16px;">Holy Cross Hostel</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="/hostel mgmt PHP/hostel/main/index.php" class="logo" style="font-size:16px;">Holy Cross Hostel</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>