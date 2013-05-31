<?php

namespace Hezten\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class HeztenCoreExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

         if (!in_array(strtolower($config['db_driver']), array('orm'))) {
            throw new \InvalidArgumentException(sprintf('Invalid db driver "%s".', $config['db_driver']));
        }
        $loader->load(sprintf('%s.yml', $config['db_driver']));

        $classes = $config['class'];
        $container->setParameter('hezten_core.class.academicyear', $classes['academicyear']);
        $container->setParameter('hezten_core.class.city', $classes['city']);
        $container->setParameter('hezten_core.class.course', $classes['course']);
        $container->setParameter('hezten_core.class.coursecategory', $classes['coursecategory']);
        $container->setParameter('hezten_core.class.enroled', $classes['enroled']);
        $container->setParameter('hezten_core.class.parents', $classes['parents']);
        $container->setParameter('hezten_core.class.state', $classes['state']);
        $container->setParameter('hezten_core.class.student', $classes['student']);
        $container->setParameter('hezten_core.class.studentparent', $classes['studentparent']);
        $container->setParameter('hezten_core.class.teacher', $classes['teacher']);
    }
}
