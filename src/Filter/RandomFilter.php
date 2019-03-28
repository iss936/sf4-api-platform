<?php

namespace App\Filter;

use ApiPlatform\Core\Api\FilterInterface;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\AbstractFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\AbstractContextAwareFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Util\QueryNameGeneratorInterface;
use Doctrine\ORM\QueryBuilder;

final class RandomFilter extends AbstractContextAwareFilter
{

	const PROPERTY_NAME = 'random';

	/**
	 * filterProperty => call when we have a parameter in the endpoint
	 * @param  string                      $property           [nom du 1er paramètre passer en GET]
	 * @param  [type]                      $value              [Valeur du 1er paramère]
	 * @param  QueryBuilder                $queryBuilder       [QueryBuilder]
	 * @param  QueryNameGeneratorInterface $queryNameGenerator [QueryNameGenerator]
	 * @param  string                      $resourceClass      [Class où le filtre est appelé]
	 * @param  string|null                 $operationName      [Method http du endpoint]
	 * @return Boolean
	 */
    protected function filterProperty(string $property, $value, QueryBuilder $queryBuilder, QueryNameGeneratorInterface $queryNameGenerator, string $resourceClass, string $operationName = null)
    {
      	if ($property !== self::PROPERTY_NAME || $value != 1) {
      		return false;
      	}
      	// $queryBuilder->addOrderBy('o.price', 'DESC');
      	$queryBuilder->addOrderBy('RAND()');

        return true;
    }

	// This function is only used to hook in documentation generators (supported by Swagger and Hydra)
	public function getDescription(string $resourceClass): array
	{
	    // if (!$this->properties) {
	    //     return [];
	    // }

	    $description = [
	    	'random' => [
	    		'property' => 'random',
	            'type' => 'boolean',
	            'required' => false,
	            'swagger' => [
	                'description' => 'If value=1 return all products order by random',
	                'name' => 'Random',
	                'type' => 'Boolean',
	            ],
	    	]
	    ];

	    return $description;
	}
}