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

require './vendor/autoload.php';

//$a = new \Smartcall\MyClass();
//echo $a->method1("x");
//$b = new \Smartcall\Components\MyComponent();
//$c = new \Smartcall\Controllers\MyController();
//$d = new \Smartcall\Models\MyModel();
//$e = new \Smartcall\Views\MyView();
//phpinfo();
//
// http://localhost/dev/examples/composer-library-template/
// http://localhost/dev/examples/composer-library-template/?action=clicked
$c = new \Smartcall\Components\MyComponent();
$c->run();
