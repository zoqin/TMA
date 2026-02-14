<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class TaskTest extends TestCase
{
    public function testTask(): void
    {
        $name = "Nouvelle tache";
        $taks = new Task($name);

        $taskName = $task->getName();

        $this->assertSame($name, $taskName);
    }
}
