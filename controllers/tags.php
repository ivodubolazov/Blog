<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ivo.dubolazov
 * Date: 26.09.13
 * Time: 11:00
 * To change this template use File | Settings | File Templates.
 */

class tags extends Controller{
	function index(){
		$this->tags = get_all("SELECT * FROM tag");
	}

}
