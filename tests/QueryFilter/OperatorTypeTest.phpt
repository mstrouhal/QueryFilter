<?php

declare(strict_types = 1);

require __DIR__ . '/../bootstrap.php';

use Mstrouhal\QueryFilter\OperatorType;
use Tester\Assert;

test(
	function () {
		Assert::true(OperatorType::isValid(OperatorType::EQUALS));
		Assert::true(OperatorType::isValid(OperatorType::LESS_THAN));
		Assert::true(OperatorType::isValid(OperatorType::LESS_OR_EQUAL));
		Assert::true(OperatorType::isValid(OperatorType::GREATER_THAN));
		Assert::true(OperatorType::isValid(OperatorType::GREATER_OR_EQUAL));
		Assert::true(OperatorType::isValid(OperatorType::STARTS));
		Assert::true(OperatorType::isValid(OperatorType::ENDS));
		Assert::true(OperatorType::isValid(OperatorType::CONTAINS));
	}
);

test(
	function () {
		Assert::false(OperatorType::isValid('xxx'));
	}
);
