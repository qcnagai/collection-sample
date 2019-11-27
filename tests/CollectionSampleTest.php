<?php

declare(strict_types=1);

namespace Qcmnagai\CollectionSample;

use PHPUnit\Framework\TestCase;

class CollectionSampleTest extends TestCase
{
    /**
     * @var CollectionSample
     */
    protected $collectionSample;

    protected function setUp() : void
    {
        $this->collectionSample = new CollectionSample;
    }

    public function testIsInstanceOfCollectionSample() : void
    {
        $actual = $this->collectionSample;
        $this->assertInstanceOf(CollectionSample::class, $actual);
    }
}
