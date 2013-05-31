<?php

namespace Hezten\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('hezten_core');

        $rootNode
            ->children()
                ->scalarNode('db_driver')->cannotBeOverwritten()->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('academicyear_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('city_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('course_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('coursecategory_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('enroled_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('parent_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('state_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('student_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('studentparent_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('teacher_class')->isRequired()->cannotBeEmpty()->end()
            ->end();
        return $treeBuilder;
    }
}
