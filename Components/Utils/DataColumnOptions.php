<?php
/**
 * (c) shopware AG <info@shopware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagImportExport\Components\Utils;

class DataColumnOptions
{
    private ?string $columnOptions;

    public function __construct(?string $columnOptions)
    {
        $this->columnOptions = $columnOptions;
    }

    public function getColumnOptions(): ?string
    {
        return $this->columnOptions;
    }
}
