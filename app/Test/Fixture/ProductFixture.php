<?php
/**
 * ProductFixture
 *
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'category_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'subcategory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'subcategory_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'subsubcategory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'subsubcategory_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'upc' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'vendor_sku' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'brand' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => false, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'long_description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'tags' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'image_original' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'image' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'imageold' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'image_1' => array('type' => 'string', 'null' => false, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'image_2' => array('type' => 'string', 'null' => false, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'image_3' => array('type' => 'string', 'null' => false, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'image_4' => array('type' => 'string', 'null' => false, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'image_5' => array('type' => 'string', 'null' => false, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'featured_product' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'gift_product' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'cost' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'list_price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'selling_price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2', 'key' => 'index'),
		'taxable' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'traditions' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ustradition_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'measurement' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'weight_unit' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'weight' => array('type' => 'string', 'null' => false, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'shipping_weight' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'volume' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'volume_unit' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dimension_unit' => array('type' => 'string', 'null' => false, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'height' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'length' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'width' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ingredients' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nutrition' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'recipes' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'creation' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'allergen_free' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
		'gluten_free' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'vegetarian' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'fat_free' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'sugar_free' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'no_msg' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'lactose_free' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'low_carb' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'nut_free' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'heart_smart' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'no_preservatives' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'organic' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'kosher' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'halal' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'fair_traded' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'give_back' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'heat_sensitivity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'all_natural' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'award_winning' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'related_products' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'active' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 1, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'category_id' => array('column' => 'category_id', 'unique' => 0),
			'subcategory_id' => array('column' => 'subcategory_id', 'unique' => 0),
			'slug' => array('column' => 'slug', 'unique' => 0),
			'active' => array('column' => 'active', 'unique' => 0),
			'ustradition_id' => array('column' => 'ustradition_id', 'unique' => 0),
			'subsubcategory_id' => array('column' => 'subsubcategory_id', 'unique' => 0),
			'price' => array('column' => 'price', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'category_id' => 1,
			'category_name' => 'Lorem ipsum dolor sit amet',
			'subcategory_id' => 1,
			'subcategory_name' => 'Lorem ipsum dolor sit amet',
			'subsubcategory_id' => 1,
			'subsubcategory_name' => 'Lorem ipsum dolor sit amet',
			'upc' => 'Lorem ipsum dolor sit amet',
			'vendor_sku' => 'Lorem ipsum dolor sit amet',
			'brand' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'long_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'tags' => 'Lorem ipsum dolor sit amet',
			'image_original' => 'Lorem ipsum dolor sit amet',
			'image' => 'Lorem ipsum dolor sit amet',
			'imageold' => 'Lorem ipsum dolor sit amet',
			'image_1' => 'Lorem ipsum dolor sit amet',
			'image_2' => 'Lorem ipsum dolor sit amet',
			'image_3' => 'Lorem ipsum dolor sit amet',
			'image_4' => 'Lorem ipsum dolor sit amet',
			'image_5' => 'Lorem ipsum dolor sit amet',
			'featured_product' => 1,
			'gift_product' => 1,
			'cost' => 1,
			'list_price' => 1,
			'selling_price' => 1,
			'price' => 1,
			'taxable' => 1,
			'traditions' => 'Lorem ipsum dolor sit amet',
			'ustradition_id' => 1,
			'measurement' => 'Lorem ipsum dolor sit a',
			'weight_unit' => 'Lorem ipsum dolor sit a',
			'weight' => 'Lorem ipsum dolor sit a',
			'shipping_weight' => 'Lorem ipsum dolor sit a',
			'volume' => 'Lorem ipsum dolor sit a',
			'volume_unit' => 'Lorem ipsum dolor sit a',
			'dimension_unit' => 'Lorem ipsum dolor sit a',
			'height' => 'Lorem ipsum dolor sit a',
			'length' => 'Lorem ipsum dolor sit a',
			'width' => 'Lorem ipsum dolor sit a',
			'ingredients' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'nutrition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'recipes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'country' => 'Lorem ipsum dolor sit amet',
			'creation' => 'Lorem ipsum dolor sit amet',
			'allergen_free' => 1,
			'gluten_free' => 1,
			'vegetarian' => 1,
			'fat_free' => 1,
			'sugar_free' => 1,
			'no_msg' => 1,
			'lactose_free' => 1,
			'low_carb' => 1,
			'nut_free' => 1,
			'heart_smart' => 1,
			'no_preservatives' => 1,
			'organic' => 1,
			'kosher' => 1,
			'halal' => 1,
			'fair_traded' => 1,
			'give_back' => 1,
			'heat_sensitivity' => 1,
			'all_natural' => 1,
			'award_winning' => 1,
			'related_products' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'active' => 1,
			'created' => '2012-10-06 01:09:31',
			'modified' => '2012-10-06 01:09:31'
		),
	);

}
