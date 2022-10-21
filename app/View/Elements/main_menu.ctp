<ul id="main-menu">

		<?php if(!isset($menus) || empty($menus)){
			$menus = $this->requestAction('/menus/index');
		}
        	//echo debug($menus)

		foreach ($menus as $menu) {
			//echo debug($menu);
		
   			?> 

		<li class="menu-list"><?php echo $menu['Menu']['title']?>
			<ul class="submenu-container">
				<?php 
					$submenuCount = count($menu['Submenu']);
				for ($k=0; $k < $submenuCount; $k++) { 	
				 ?>
					<li class="submenu-list"><?php echo $menu['Submenu'][$k]['title'] ?></li>
			<?php } ?>
			</ul>
		</li>



		<?php } ?>
		<div class="clearfloat"></div>
</ul>