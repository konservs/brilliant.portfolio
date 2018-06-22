<?php
namespace Brilliant\Portfolio;

/**
 * Basic class to control Portfolio Categories
 *
 * @method \Brilliant\Portfolio\Category itemGet(integer $id)
 * @method \Brilliant\Portfolio\Category[] itemsGet(integer[] $ids)
 * @method \Brilliant\Portfolio\Category[] itemsFilter($params)
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Categories extends \Brilliant\Items\BItemsTree{
	use \Brilliant\BSingleton;
	protected $tableName='portfolio_categories';
	protected $itemClassName='\Brilliant\Portfolio\Category';
	}
