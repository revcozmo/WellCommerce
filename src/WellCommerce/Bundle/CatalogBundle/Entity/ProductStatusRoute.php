<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CatalogBundle\Entity;

use WellCommerce\Bundle\CoreBundle\Entity\Route;

/**
 * Class ProductStatusRoute
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProductStatusRoute extends Route
{
    public function getType(): string
    {
        return 'product_status';
    }
}
