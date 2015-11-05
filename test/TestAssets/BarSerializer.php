<?php

namespace Spray\Serializer\TestAssets;

use Spray\Serializer\BoundClosureSerializer;
use Spray\Serializer\SerializerInterface;

class BarSerializer extends BoundClosureSerializer
{
    public function __construct()
    {
        parent::__construct('Spray\Serializer\TestAssets\Bar');
    }
    
    protected function bindSerializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $data['foobar'] = (string) $subject->foobar;
        };
    }
    
    protected function bindDeserializer()
    {
        return function($subject, array &$data, SerializerInterface $serializer) {
            $subject->foobar = (string) $data['foobar'];
        };
    }
}
