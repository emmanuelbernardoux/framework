<?php
abstract class BaseAdminController extends BaseController {

	public function __construct($controller) {

		parent::__construct($controller);

		$vars['website_title'] = 'Backoffice';
		$vars['website_description'] = 'Admin Description';
		$vars['author'] = 'Admin Author';

		$vars['pages'] = array(
			'admin/index/' => array('Dashboard', 'fa-dashboard'),
            'admin/post/' => array('Posts', 'fa-file-text'),
            'admin/contact/' => array('Contacts', 'fa-envelope')
		);

		$this->controller->response->addVars($vars);
	}
}