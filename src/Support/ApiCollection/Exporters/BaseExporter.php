<?php

declare(strict_types=1);

namespace XtendPackages\RESTPresenter\Support\ApiCollection\Exporters;

use XtendPackages\RESTPresenter\Concerns\InteractsWithPipeline;

abstract class BaseExporter
{
    use InteractsWithPipeline;

    /**
     * @var string Filename to save the output
     */
    protected string $filename;

    /**
     * @var array<string, mixed> Output of the schema
     */
    protected array $schema;

    public function saveTo(string $filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    public function getSchema(): string
    {
        return collect($this->schema)->toJson(JSON_PRETTY_PRINT);
    }

    public function export(): void
    {
        $this->schema();
    }
}
