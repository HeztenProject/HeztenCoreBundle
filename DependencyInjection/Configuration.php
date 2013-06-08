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
                ->arrayNode('class')
                    ->children()
                        ->scalarNode('academicyear')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('city')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('course')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('coursecategory')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('enroled')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('parents')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('state')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('student')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('studentparent')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('subject')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('teacher')->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end()
                ->arrayNode('manager')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('academicyear')->defaultValue('hezten_core.manager.academicyear.default')->cannotBeEmpty()->end()
                        ->scalarNode('course')->defaultValue('hezten_core.manager.course.default')->cannotBeEmpty()->end()
                        ->scalarNode('student')->defaultValue('hezten_core.manager.student.default')->cannotBeEmpty()->end()
                        ->scalarNode('subject')->defaultValue('hezten_core.manager.subject.default')->cannotBeEmpty()->end()
                        ->scalarNode('teacher')->defaultValue('hezten_core.manager.teacher.default')->cannotBeEmpty()->end()
                        ->scalarNode('enroled')->defaultValue('hezten_core.manager.enroled.default')->cannotBeEmpty()->end()
                        ->scalarNode('parents')->defaultValue('hezten_core.manager.parents.default')->cannotBeEmpty()->end()
                    ->end()
                ->end()
            ->end();
        return $treeBuilder;
    }
}
