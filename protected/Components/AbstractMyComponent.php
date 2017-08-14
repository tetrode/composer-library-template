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
 * Example of an abstract class
 *
 * A class can extend only ONE abstract class.
 *
 * Abstract classes can have constants, members, method stubs (methods without a body) and defined methods
 *
 * Methods and members of an abstract class can be defined with any visibility, whereas all methods of an
 * interface must be defined as public (they are defined public by default)
 *
 * When inheriting an abstract class, a concrete child class must define the abstract methods, whereas an
 * abstract class can extend another abstract class and abstract methods from the parent class don't have
 * to be defined
 *
 * A child class can only extend a single class (abstract or concrete)
 *
 * A child class can define abstract methods with the same or less restrictive visibility
 *
 * Abstract classes must be named Abstract + Class name
 *
 * @author mark
 */
abstract class AbstractMyComponent {

    // child can override this
    public function style($string) {
        return "<strong>" . $string . "</strong>";
    }

    // child must define this
    abstract public function comment();
}
