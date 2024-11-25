<?php

declare(strict_types=1);

namespace SemanticHTML5\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use SemanticHTML5\HofffContaoHtmlElementsBundle;

final class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(HofffContaoHtmlElementsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['semantic_html5']),
        ];
    }
}
