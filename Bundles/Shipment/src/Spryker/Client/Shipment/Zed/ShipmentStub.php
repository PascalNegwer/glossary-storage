<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Client\Shipment\Zed;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Client\ZedRequest\ZedRequestClient;

class ShipmentStub implements ShipmentStubInterface
{

    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClient
     */
    protected $zedStub;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClient $zedStub
     */
    public function __construct(ZedRequestClient $zedStub)
    {
        $this->zedStub = $zedStub;
    }

    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\ShipmentMethodsTransfer
     */
    public function getAvailableMethods(QuoteTransfer $quoteTransfer)
    {
        return $this->zedStub->call('/shipment/gateway/get-available-methods', $quoteTransfer, null, true);
    }

}
