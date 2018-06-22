<?php
namespace Brilliant\Portfolio;
use Brilliant\Portfolio\Categories;

/**
 * Basic class to control single bugtracker issue
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Category extends \Brilliant\Items\BItemsItemTree{
	protected $collectionname='\Brilliant\Portfolio\Categories';
	protected $tableName='portfolio_categories';
	/**
	 * @var DateTime
	 */
	public $created;
	/**
	 * @var DateTime
	 */
	public $modified;
	/**
	 * Constructor - init fields...
	 */
	function __construct() {
		parent::__construct();
		$this->fieldAddRaw('name','string');
		$this->fieldAddRaw('image','string');
		$this->fieldAddRaw('imageAlt','string');
		$this->fieldAddRaw('linkDetails','string');
		$this->fieldAddRaw('description','string');
		//Created & modified
		$this->fieldAddRaw('created','dt',array('readonly'=>true));
		$this->fieldAddRaw('modified','dt',array('readonly'=>true));
		}

	public function getName(){
		return $this->name;
		}
	}
