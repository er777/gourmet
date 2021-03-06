<div class="subcategories view">
<h2><?php  echo __('Subcategory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subcategory['Subcategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subcategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $subcategory['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subsubcategory Count'); ?></dt>
		<dd>
			<?php echo h($subcategory['Subcategory']['subsubcategory_count']); ?>
			&nbsp;
		</dd>
		<dt>Name</dt>
		<dd>
			<?php echo h($subcategory['Subcategory']['name']); ?>
			&nbsp;
		</dd>
		<dt>Slug</dt>
		<dd>
			<?php echo h($subcategory['Subcategory']['slug']); ?>
			&nbsp;
		</dd>
		<dt>Created</dt>
		<dd>
			<?php echo h($subcategory['Subcategory']['created']); ?>
			&nbsp;
		</dd>
		<dt>Modified</dt>
		<dd>
			<?php echo h($subcategory['Subcategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subcategory'), array('action' => 'edit', $subcategory['Subcategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subcategory'), array('action' => 'delete', $subcategory['Subcategory']['id']), null, __('Are you sure you want to delete # %s?', $subcategory['Subcategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcategory'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subsubcategories'), array('controller' => 'subsubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subsubcategory'), array('controller' => 'subsubcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($subcategory['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Category Name'); ?></th>
		<th><?php echo __('Subcategory Id'); ?></th>
		<th><?php echo __('Subcategory Name'); ?></th>
		<th><?php echo __('Subsubcategory Id'); ?></th>
		<th><?php echo __('Subsubcategory Name'); ?></th>
		<th><?php echo __('Upc'); ?></th>
		<th><?php echo __('Vendor Sku'); ?></th>
		<th><?php echo __('Brand'); ?></th>
		<th>Name</th>
		<th>Slug</th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Long Description'); ?></th>
		<th><?php echo __('Tags'); ?></th>
		<th><?php echo __('Image Original'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Imageold'); ?></th>
		<th><?php echo __('Image 1'); ?></th>
		<th><?php echo __('Image 2'); ?></th>
		<th><?php echo __('Image 3'); ?></th>
		<th><?php echo __('Image 4'); ?></th>
		<th><?php echo __('Image 5'); ?></th>
		<th><?php echo __('Featured Product'); ?></th>
		<th><?php echo __('Gift Product'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('List Price'); ?></th>
		<th><?php echo __('Selling Price'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Taxable'); ?></th>
		<th><?php echo __('Traditions'); ?></th>
		<th><?php echo __('Ustradition Id'); ?></th>
		<th><?php echo __('Measurement'); ?></th>
		<th><?php echo __('Weight Unit'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Shipping Weight'); ?></th>
		<th><?php echo __('Volume'); ?></th>
		<th><?php echo __('Volume Unit'); ?></th>
		<th><?php echo __('Dimension Unit'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Ingredients'); ?></th>
		<th><?php echo __('Nutrition'); ?></th>
		<th><?php echo __('Recipes'); ?></th>
		<th><?php echo __('Serving Suggestions'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Creation'); ?></th>
		<th><?php echo __('Allergen Free'); ?></th>
		<th><?php echo __('Gluten Free'); ?></th>
		<th><?php echo __('Vegetarian'); ?></th>
		<th><?php echo __('Fat Free'); ?></th>
		<th><?php echo __('Sugar Free'); ?></th>
		<th><?php echo __('No Msg'); ?></th>
		<th><?php echo __('Lactose Free'); ?></th>
		<th><?php echo __('Low Carb'); ?></th>
		<th><?php echo __('Nut Free'); ?></th>
		<th><?php echo __('Heart Smart'); ?></th>
		<th><?php echo __('No Preservatives'); ?></th>
		<th><?php echo __('Organic'); ?></th>
		<th><?php echo __('Kosher'); ?></th>
		<th><?php echo __('Halal'); ?></th>
		<th><?php echo __('Fair Traded'); ?></th>
		<th><?php echo __('Give Back'); ?></th>
		<th><?php echo __('Heat Sensitivity'); ?></th>
		<th><?php echo __('All Natural'); ?></th>
		<th><?php echo __('Award Winning'); ?></th>
		<th><?php echo __('Related Products'); ?></th>
		<th>Active</th>
		<th>Created</th>
		<th>Modified</th>
		<th><?php echo __('Attribution'); ?></th>
		<th class="actions">Actions</th>
	</tr>
	<?php
		$i = 0;
		foreach ($subcategory['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['user_id']; ?></td>
			<td><?php echo $product['category_id']; ?></td>
			<td><?php echo $product['category_name']; ?></td>
			<td><?php echo $product['subcategory_id']; ?></td>
			<td><?php echo $product['subcategory_name']; ?></td>
			<td><?php echo $product['subsubcategory_id']; ?></td>
			<td><?php echo $product['subsubcategory_name']; ?></td>
			<td><?php echo $product['upc']; ?></td>
			<td><?php echo $product['vendor_sku']; ?></td>
			<td><?php echo $product['brand']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['slug']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['long_description']; ?></td>
			<td><?php echo $product['tags']; ?></td>
			<td><?php echo $product['image_original']; ?></td>
			<td><?php echo $product['image']; ?></td>
			<td><?php echo $product['imageold']; ?></td>
			<td><?php echo $product['image_1']; ?></td>
			<td><?php echo $product['image_2']; ?></td>
			<td><?php echo $product['image_3']; ?></td>
			<td><?php echo $product['image_4']; ?></td>
			<td><?php echo $product['image_5']; ?></td>
			<td><?php echo $product['featured_product']; ?></td>
			<td><?php echo $product['gift_product']; ?></td>
			<td><?php echo $product['cost']; ?></td>
			<td><?php echo $product['list_price']; ?></td>
			<td><?php echo $product['selling_price']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['taxable']; ?></td>
			<td><?php echo $product['traditions']; ?></td>
			<td><?php echo $product['ustradition_id']; ?></td>
			<td><?php echo $product['measurement']; ?></td>
			<td><?php echo $product['weight_unit']; ?></td>
			<td><?php echo $product['weight']; ?></td>
			<td><?php echo $product['shipping_weight']; ?></td>
			<td><?php echo $product['volume']; ?></td>
			<td><?php echo $product['volume_unit']; ?></td>
			<td><?php echo $product['dimension_unit']; ?></td>
			<td><?php echo $product['height']; ?></td>
			<td><?php echo $product['length']; ?></td>
			<td><?php echo $product['width']; ?></td>
			<td><?php echo $product['ingredients']; ?></td>
			<td><?php echo $product['nutrition']; ?></td>
			<td><?php echo $product['recipes']; ?></td>
			<td><?php echo $product['serving_suggestions']; ?></td>
			<td><?php echo $product['country']; ?></td>
			<td><?php echo $product['creation']; ?></td>
			<td><?php echo $product['allergen_free']; ?></td>
			<td><?php echo $product['gluten_free']; ?></td>
			<td><?php echo $product['vegetarian']; ?></td>
			<td><?php echo $product['fat_free']; ?></td>
			<td><?php echo $product['sugar_free']; ?></td>
			<td><?php echo $product['no_msg']; ?></td>
			<td><?php echo $product['lactose_free']; ?></td>
			<td><?php echo $product['low_carb']; ?></td>
			<td><?php echo $product['nut_free']; ?></td>
			<td><?php echo $product['heart_smart']; ?></td>
			<td><?php echo $product['no_preservatives']; ?></td>
			<td><?php echo $product['organic']; ?></td>
			<td><?php echo $product['kosher']; ?></td>
			<td><?php echo $product['halal']; ?></td>
			<td><?php echo $product['fair_traded']; ?></td>
			<td><?php echo $product['give_back']; ?></td>
			<td><?php echo $product['heat_sensitivity']; ?></td>
			<td><?php echo $product['all_natural']; ?></td>
			<td><?php echo $product['award_winning']; ?></td>
			<td><?php echo $product['related_products']; ?></td>
			<td><?php echo $product['active']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td><?php echo $product['attribution']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('View', array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link('Edit', array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink('Delete', array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Recipes'); ?></h3>
	<?php if (!empty($subcategory['Recipe'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Subcategory Id'); ?></th>
		<th>Name</th>
		<th>Slug</th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Tags'); ?></th>
		<th><?php echo __('Ingredients'); ?></th>
		<th><?php echo __('Preparation'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Image 1'); ?></th>
		<th><?php echo __('Image 2'); ?></th>
		<th><?php echo __('Image 3'); ?></th>
		<th><?php echo __('Image Caption 1'); ?></th>
		<th><?php echo __('Image Caption 2'); ?></th>
		<th><?php echo __('Image Caption 3'); ?></th>
		<th>Active</th>
		<th>Created</th>
		<th>Modified</th>
		<th class="actions">Actions</th>
	</tr>
	<?php
		$i = 0;
		foreach ($subcategory['Recipe'] as $recipe): ?>
		<tr>
			<td><?php echo $recipe['id']; ?></td>
			<td><?php echo $recipe['user_id']; ?></td>
			<td><?php echo $recipe['category_id']; ?></td>
			<td><?php echo $recipe['subcategory_id']; ?></td>
			<td><?php echo $recipe['name']; ?></td>
			<td><?php echo $recipe['slug']; ?></td>
			<td><?php echo $recipe['description']; ?></td>
			<td><?php echo $recipe['tags']; ?></td>
			<td><?php echo $recipe['ingredients']; ?></td>
			<td><?php echo $recipe['preparation']; ?></td>
			<td><?php echo $recipe['comment']; ?></td>
			<td><?php echo $recipe['image_1']; ?></td>
			<td><?php echo $recipe['image_2']; ?></td>
			<td><?php echo $recipe['image_3']; ?></td>
			<td><?php echo $recipe['image_caption_1']; ?></td>
			<td><?php echo $recipe['image_caption_2']; ?></td>
			<td><?php echo $recipe['image_caption_3']; ?></td>
			<td><?php echo $recipe['active']; ?></td>
			<td><?php echo $recipe['created']; ?></td>
			<td><?php echo $recipe['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('View', array('controller' => 'recipes', 'action' => 'view', $recipe['id'])); ?>
				<?php echo $this->Html->link('Edit', array('controller' => 'recipes', 'action' => 'edit', $recipe['id'])); ?>
				<?php echo $this->Form->postLink('Delete', array('controller' => 'recipes', 'action' => 'delete', $recipe['id']), null, __('Are you sure you want to delete # %s?', $recipe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subsubcategories'); ?></h3>
	<?php if (!empty($subcategory['Subsubcategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Subcategory Id'); ?></th>
		<th><?php echo __('Subcategory Name'); ?></th>
		<th>Name</th>
		<th>Slug</th>
		<th>Created</th>
		<th>Modified</th>
		<th class="actions">Actions</th>
	</tr>
	<?php
		$i = 0;
		foreach ($subcategory['Subsubcategory'] as $subsubcategory): ?>
		<tr>
			<td><?php echo $subsubcategory['id']; ?></td>
			<td><?php echo $subsubcategory['subcategory_id']; ?></td>
			<td><?php echo $subsubcategory['subcategory_name']; ?></td>
			<td><?php echo $subsubcategory['name']; ?></td>
			<td><?php echo $subsubcategory['slug']; ?></td>
			<td><?php echo $subsubcategory['created']; ?></td>
			<td><?php echo $subsubcategory['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('View', array('controller' => 'subsubcategories', 'action' => 'view', $subsubcategory['id'])); ?>
				<?php echo $this->Html->link('Edit', array('controller' => 'subsubcategories', 'action' => 'edit', $subsubcategory['id'])); ?>
				<?php echo $this->Form->postLink('Delete', array('controller' => 'subsubcategories', 'action' => 'delete', $subsubcategory['id']), null, __('Are you sure you want to delete # %s?', $subsubcategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subsubcategory'), array('controller' => 'subsubcategories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
