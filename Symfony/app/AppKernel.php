<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new NoxIntranet\CommunicationBundle\NoxIntranetCommunicationBundle(),
            new NoxIntranet\MenuBundle\NoxIntranetMenuBundle(),
            new NoxIntranet\AdministrationBundle\NoxIntranetAdministrationBundle(),
            new NoxIntranet\UserBundle\NoxIntranetUserBundle(),
            new NoxIntranet\SupportBundle\NoxIntranetSupportBundle(),
            new NoxIntranet\AccueilBundle\NoxIntranetAccueilBundle(),
            new NoxIntranet\RessourcesBundle\NoxIntranetRessourcesBundle(),
            new NoxIntranet\SupportSIBundle\NoxIntranetSupportSIBundle(),
			new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new NoxIntranet\MajDBBundle\NoxIntranetMajDBBundle(),
            new NoxIntranet\VerifMajDBBundle\NoxIntranetVerifMajDBBundle(),
			new FM\ElfinderBundle\FMElfinderBundle(),
			new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new NoxIntranet\ListingKeywordsReferencesBundle\NoxIntranetListingKeywordsReferencesBundle(),
            new NoxIntranet\PDFParsingBundle\NoxIntranetPDFParsingBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
			$bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
