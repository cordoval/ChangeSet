<?php

namespace ChangeSetTest\IdentityMap;

use ChangeSet\IdentityMap\IdentityMap;
use PHPUnit_Framework_TestCase;

class IdentityMapTest extends PHPUnit_Framework_TestCase
{
    public function testIdentityMap()
    {
        $object = new \stdClass();
        $object->identity = 'foo';
        $identityMap = new IdentityMap();

        $identityMap->add($object);
        $this->assertSame($object, $identityMap->get('stdClass', 'foo'));
        $identityMap->remove($object);
        $this->assertNull($identityMap->get('stdClass', 'foo'));
    }
}
