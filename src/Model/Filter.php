<?php

Namespace Model
{
    USE Symfony\Component\Validator\Exception\InvalidOptionsException;

    Class Filters
    {
        private $data = [];

        public function __construct(array $data = [])
        {
            if (! isset($data['type'])) Throw New InvalidOptionsException(
                'Constructor requires filter type to be passed.', get_class_methods(__CLASS__)
            );
        }

        public function isPositiveInteger()
        {
            
        }
    }
}
