<?php

/*
 * This file is part of the JabberJaxBundle package.
 *
 * (c) Mlanawo Mbechezi <mlanawo.mbechezi@ikimea.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ikimea\JabberJaxlBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This class contains the configuration information for the bundle
 *
 * @author Mlanawo Mbechezi <mlanawo.mbechezi@ikimea.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        return $treeBuilder;
    }
}