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

namespace Smartcall\Components;

/**
 * A sample component class
 *
 * Use this section to define what this class is doing, the PHPDocumentator will use this
 * to automatically generate an API documentation using this information.
 *
 * Classes in the /protected/Components folder orchestrate MVC architecture calls
 *
 * @author mark
 */
class MyComponent extends AbstractMyComponent implements MyComponentInterface {

    use MyComponentTrait;

    /**
     *
     */
    public function run() {
        $model = new \Smartcall\Models\MyModel();
        $controller = new \Smartcall\Controllers\MyController($model);
        $view = new \Smartcall\Views\MyView($controller, $model);

        if (isset($_GET['action']) && !empty($_GET['action'])) {
            $controller->{$_GET['action']}();
        }

        echo $this->style(
                $view->output() . " " . $this->sum(40, 2)
        );
    }

    // Must define this...
    public function comment() {

    }
}
