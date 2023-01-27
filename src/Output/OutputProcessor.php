<?php

declare(strict_types=1);

namespace Detain\TestGenerator\Output;

interface OutputProcessor
{
    public function write(string $output): void;
}
