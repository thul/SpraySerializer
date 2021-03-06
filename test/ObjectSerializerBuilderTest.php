<?php

namespace Spray\Serializer;

use PHPUnit_Framework_TestCase;

class ObjectSerializerBuilderTest extends PHPUnit_Framework_TestCase
{
    public function testBuildSubjectSerializer()
    {
        $builder = new ObjectSerializerBuilder(new ReflectionRegistry());
        
        $this->assertEquals(
            file_get_contents(__DIR__ . '/TestAssets/SubjectSerializer.php'),
            $builder->build('Spray\Serializer\TestAssets\Subject')
        );
    }
    
    public function testBuildFoo()
    {
        $builder = new ObjectSerializerBuilder(new ReflectionRegistry());
        
        $this->assertEquals(
            file_get_contents(__DIR__ . '/TestAssets/FooSerializer.php'),
            $builder->build('Spray\Serializer\TestAssets\Foo')
        );
    }
    
    public function testBuildBar()
    {
        $builder = new ObjectSerializerBuilder(new ReflectionRegistry());
        
        $this->assertEquals(
            file_get_contents(__DIR__ . '/TestAssets/BarSerializer.php'),
            $builder->build('Spray\Serializer\TestAssets\Bar')
        );
    }
    
    public function testBuildBarCollection()
    {
        $builder = new ObjectSerializerBuilder(new ReflectionRegistry());
        
        $this->assertEquals(
            file_get_contents(__DIR__ . '/TestAssets/BarCollectionSerializer.php'),
            $builder->build('Spray\Serializer\TestAssets\BarCollection')
        );
    }
    
    public function testBuildHasInterfaceRelation()
    {
        $builder = new ObjectSerializerBuilder(new ReflectionRegistry());
        
        $this->assertEquals(
            file_get_contents(__DIR__ . '/TestAssets/HasInterfaceRelationSerializer.php'),
            $builder->build('Spray\Serializer\TestAssets\HasInterfaceRelation')
        );
    }
    
    public function testBuildScalar()
    {
        $builder = new ObjectSerializerBuilder(new ReflectionRegistry());
        
        $this->assertEquals(
            file_get_contents(__DIR__ . '/TestAssets/ScalarSerializer.php'),
            $builder->build('Spray\Serializer\TestAssets\Scalar')
        );
    }
    
    public function testBuildWithOtherNamespace()
    {
        $builder = new ObjectSerializerBuilder(new ReflectionRegistry());
        
        $this->assertEquals(
            file_get_contents(__DIR__ . '/TestAssets/WithOtherNamespaceSerializer.php'),
            $builder->build('Spray\Serializer\TestAssets\WithOtherNamespace')
        );
    }
}
