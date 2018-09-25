<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyUserGuiExtension\Dependency\Plugin\CompanyUserGui;

use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

interface CompanyUserTableConfigExpanderPluginInterface
{
    /**
     * Specification:
     * - This plugin interface allows you to expand config options of company user table in Zed.
     *
     * @api
     *
     * @param \Spryker\Zed\Gui\Communication\Table\TableConfiguration $config
     *
     * @return \Spryker\Zed\Gui\Communication\Table\TableConfiguration
     */
    public function expandConfig(TableConfiguration $config): TableConfiguration;
}
