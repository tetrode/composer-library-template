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
 * Example of a Trait
 *
 * A Trait is a mechanism for code reuse in single inheritance languages such as PHP.
 * A Trait is similar to a class, but only intended to group functionality in a fine-grained
 * and consistent way. You cannot instantiate Traits on their own.
 *
 * Traits reduce code duplication and prevent you making complicated class inheritance.
 * Think of PHP copy/pasting the Traits into your classes at run time.
 *
 * Traits must be named Class name + Trait
 *
 * @author mark
 */
trait MyComponentTrait {

    public function sum($a, $b) {
        return $a + $b;
    }
}
