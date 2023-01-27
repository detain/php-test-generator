<?php

declare(strict_types=1);

namespace Detain\TestGenerator\Output\Exception;

class UnableToWriteTestFileException extends \Exception
{
    public function __construct()
    {
        $error = error_get_last();
        parent::__construct("Unable to write test file because {$error['message']}");
    }
}
