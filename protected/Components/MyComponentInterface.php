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
 * Example of an interface
 *
 * A class can implement MULTIPLE interfaces.
 *
 * Interfaces can only have constants and methods stubs.
 *
 * All methods of an interface must be defined as public (they are defined public by default).
 *
 * An interface extending another interface is not responsible for implementing methods from
 * the parent interface. This is because interfaces cannot define any implementation.
 *
 * An interface can extend or a class can implement multiple other interfaces.
 *
 * A class implementing an interface must define the methods with the exact same visibility (public).
 *
 * Interfaces must be named Class name + Interface
 *
 * @author mark
 */
interface MyComponentInterface {

    public function run();
}
