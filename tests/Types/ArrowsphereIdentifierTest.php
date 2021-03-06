<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\ArrowsphereIdentifier;
use PHPUnit\Framework\TestCase;

/**
 * Class ArrowsphereIdentifierTest
 */
class ArrowsphereIdentifierTest extends TestCase
{
    public function testFields(): void
    {
        $arrowsphereIdentifier = new ArrowsphereIdentifier([
            ArrowsphereIdentifier::ORDERABLE_SKU => 'orderable sku',
            ArrowsphereIdentifier::SKU           => 'sku',
            ArrowsphereIdentifier::SKU_XAC       => 'sku xac',
            ArrowsphereIdentifier::SKU_XSP       => 'sku xsp',
        ]);

        self::assertSame('orderable sku', $arrowsphereIdentifier->getOrderableSku());
        self::assertSame('sku', $arrowsphereIdentifier->getSku());
        self::assertSame('sku xac', $arrowsphereIdentifier->getSkuXac());
        self::assertSame('sku xsp', $arrowsphereIdentifier->getSkuXsp());
    }
}
