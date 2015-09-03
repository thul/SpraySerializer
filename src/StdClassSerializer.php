<?php

namespace Spray\Serializer;

use stdClass;

class StdClassSerializer implements SerializerInterface
{
    /**
     * {@inheritdoc}
     */
    public function accepts($subject)
    {
        if (is_object($subject)) {
            $subject = get_class($subject);
        }
        return $subject === 'stdClass';
    }

    /**
     * {@inheritdoc}
     */
    public function construct($subject, &$data = array())
    {
        return new stdClass;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($subject, &$data = array(), SerializerInterface $serializer = null)
    {
        foreach ($subject as $property => $value) {
            $data[$property] = $value;
        }
        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function deserialize($subject, &$data = array(), SerializerInterface $serializer = null)
    {
        foreach ($data as $property => $value) {
            @$subject->$property = $value;
        }
        return $subject;
    }
}