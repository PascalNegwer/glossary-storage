<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Sales\Dependency\Facade;

interface SalesToCustomerInterface
{

    /**
     * @param string $customerReference
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer|null
     */
    public function findCustomerByReference($customerReference);

    /**
     * @param string $customerReference
     *
     * @return bool
     */
    public function hasCustomerByReference($customerReference);

}
