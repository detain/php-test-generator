<?php

namespace Mihaeu\TestGenerator;

function phpunit6Template() : \Closure
{
    return function (string $class, array $parameters = []) : string {
    ob_start(); ?>
?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

class <?= $class ?>Test extends TestCase
{
    /** @var <?= $class ?> */
    private $<?= lcfirst($class) ?>;

<?php if (!empty($parameters)) : ?>
<?php foreach ($parameters as $name => $type) : ?>
    /** @var <?= $type ?> | PHPUnit_Framework_MockObject_MockObject */
    private $<?= $name ?>;

<?php endforeach; ?>
<?php endif; ?>
    protected function setUp()
    {
<?php if (empty($parameters)) :?>
        $this-><?= lcfirst($class) ?> = new <?= $class ?>();
<?php else : ?>
<?php foreach ($parameters as $name => $type) : ?>
        $this-><?= $name ?> = $this->createMock(<?= $type ?>::class);
<?php endforeach; ?>
        $this-><?= lcfirst($class) ?> = new <?= $class ?>(
            <?= implode(",\n            ", array_map(function ($x) {return '$this->'.$x;}, array_keys($parameters))) ?>

        );
<?php endif; ?>
    }

    public function testMissing()
    {
        $this->fail('Test not yet implemented');
    }
}
<?php
    return '<'.ob_get_clean();
    };
}
