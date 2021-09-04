<?php
declare(strict_types=1);

namespace FD\Command;

use Doctrine\Common\Annotations\AnnotationReader;
use FD\Model\Boss;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class TestCommand
{
    public function run(): void
    {
        // create meta data factory to read annotation from the class
        $metaDataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        // create name converter that will convert property names based on the @SerializedName annotation
        $nameConverter = new MetadataAwareNameConverter($metaDataFactory);

        // create serializer
        $serializer = new Serializer(
            [
                // array denormalizer to be able to handle Npc[] attribute
                new ArrayDenormalizer(),
                // create object denormalizer to map the xml data to the models
                new ObjectNormalizer($metaDataFactory, $nameConverter, null, new ReflectionExtractor())
            ],

            // the xml to array decoder
            [new XmlEncoder()]
        );

        // transform xml to boss model
        $boss = $serializer->deserialize(file_get_contents(__DIR__ . '/../../data.xml'), Boss::class, 'xml');

        // show it
        var_dump($boss);
    }
}
