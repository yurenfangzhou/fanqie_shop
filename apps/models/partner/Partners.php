<?php if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
/**
 * 合伙人管理
 * @author chaituan@126.com
 */
class Partners extends MY_Model {

    function __construct() {
        parent::__construct ();
        $this->table_name = 'partner';
    }
}