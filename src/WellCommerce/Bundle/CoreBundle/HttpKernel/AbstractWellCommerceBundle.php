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

namespace WellCommerce\Bundle\CoreBundle\HttpKernel;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use WellCommerce\Bundle\CoreBundle\DependencyInjection\Compiler\AutoRegisterControllerPass;
use WellCommerce\Bundle\CoreBundle\DependencyInjection\Compiler\AutoRegisterDataGridPass;
use WellCommerce\Bundle\CoreBundle\DependencyInjection\Compiler\AutoRegisterDataSetPass;
use WellCommerce\Bundle\CoreBundle\DependencyInjection\Compiler\AutoRegisterEntityFactoryPass;
use WellCommerce\Bundle\CoreBundle\DependencyInjection\Compiler\AutoRegisterFormBuilderPass;
use WellCommerce\Bundle\CoreBundle\DependencyInjection\Compiler\AutoRegisterManagerPass;
use WellCommerce\Bundle\CoreBundle\DependencyInjection\Compiler\AutoRegisterRepositoryPass;

/**
 * Class AbstractWellCommerceBundle
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
abstract class AbstractWellCommerceBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        
        $container->addCompilerPass(new AutoRegisterRepositoryPass($this));
        $container->addCompilerPass(new AutoRegisterEntityFactoryPass($this));
        $container->addCompilerPass(new AutoRegisterDataSetPass($this));
        $container->addCompilerPass(new AutoRegisterDataGridPass($this));
        $container->addCompilerPass(new AutoRegisterFormBuilderPass($this));
        $container->addCompilerPass(new AutoRegisterManagerPass($this));
        $container->addCompilerPass(new AutoRegisterControllerPass($this));
    }
}
