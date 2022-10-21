<?php foreach ($categories as $category) { ?>
				
				<div class="heading"><?php echo $category['Category']['title'] ?></div>


					<ul id="food-tree" class='container'>

					<?php $subcategoryCount = count($category['Subcategory']);
						for ($i=0; $i < $subcategoryCount ; $i++) { ?>

							<li class="subcategories"><span><?php echo $this->Html->link($category['Subcategory'][$i]['title'], '/foods/subcategories/'.$category['Subcategory'][$i]['id'])  ?></span>
								<?php
									$typeCount = count($category['Subcategory'][$i]['Type']);?>
									<ul class="types-container">
										<?php for ($j=0; $j < $typeCount; $j++) {?>
										<li class="types"><?php echo $this->Html->link($category['Subcategory'][$i]['Type'][$j]['title'], '/foods/types/'.$category['Subcategory'][$i]['Type'][$j]['id'])?></li>
										<?php } ?>
									</ul>
								</li>
								<?php } ?>

						</ul> 
					<?php }
					?>