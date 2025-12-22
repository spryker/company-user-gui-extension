<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyUserGuiExtension\Dependency\Plugin;

interface CompanyUserTableBulkDataExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands table data rows of company user table in Zed in bulk.
     * - Allows for bulk operations like batch database queries.
     *
     * @api
     *
     * @param list<array<string, mixed>> $companyUserDataTableRows
     *
     * @return list<array<string, mixed>>
     */
    public function expandData(array $companyUserDataTableRows): array;
}
