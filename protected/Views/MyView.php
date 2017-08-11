<?php

/*
 *  Copyright (c) 2011-2017, Smartconnect; All Rights Reserved
 *
 *  This code is confidential to Smartconnect N.V. and shall not be disclosed
 *  outside the company without the prior written permission of the Director.
 *
 *  In the event that such disclosure is permitted the code shall not be copied
 *  or distributed other than on a need-to-know basis and any recipients are
 *  required to sign a confidentiality agreement in favour of Smartconnect N.V.
 */

namespace Smartcall\Views;

/**
 * Description of MyView
 *
 * @author mark
 */
class MyView {

    private $model;
    private $controller;

    public function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
        return '<p><a href="?action=clicked">' . $this->model->string . "</a></p>";
    }
}
