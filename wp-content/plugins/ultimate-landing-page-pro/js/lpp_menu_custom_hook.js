

	jQuery(function ($) {
			 

				var $newmenu1 = $('<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-landingpage" id="menu-posts-landingpage"><a href="edit.php?post_type=landingpage" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-landingpage" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-welcome-add-page"><br></div><div class="wp-menu-name">Landing Page</div></a><ul class="wp-submenu wp-submenu-wrap"><li class="wp-submenu-head">Landing Page</li><li class="wp-first-item"><a href="edit.php?post_type=landingpage" class="wp-first-item">All Landing Pages</a></li><li><a href="post-new.php?post_type=landingpage">Add New</a></li><li><a href="edit.php?post_type=landingpage&amp;page=lpp_subscribers_list_menu">DB Subscribers List</a></li></ul></li>');

				$('#adminmenu').prepend($newmenu1);



//end
});