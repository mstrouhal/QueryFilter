<?php

declare(strict_types = 1);

namespace Mstrouhal\QueryFilter;

abstract class OperatorType
{

	const EQUALS = '=';

	const LESS_THAN = '<';

	const LESS_OR_EQUAL = '<=';

	const GREATER_THAN = '>';

	const GREATER_OR_EQUAL = '>=';

	const STARTS = 'starts';

	const ENDS = 'ends';

	const CONTAINS = 'contains';

	private static function getAll() : array
	{
		return [
			self::EQUALS,
			self::LESS_THAN,
			self::LESS_OR_EQUAL,
			self::GREATER_THAN,
			self::GREATER_OR_EQUAL,
			self::STARTS,
			self::ENDS,
			self::CONTAINS,
		];
	}

	public static function isValid(string $operator)
	{
		return in_array($operator, self::getAll(), true);
	}

}
