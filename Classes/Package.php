<?php
namespace Famelo\PDF;

/*                                                                        *
 * This script belongs to the Neos Flow framework.                        *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Package\Package as BasePackage;

/**
 * The Neos Flow Package
 */
class Package extends BasePackage {
    /**
     * Invokes custom PHP code directly after the package manager has been initialized.
     *
     * @param Bootstrap $bootstrap The current bootstrap
     * @return void
     */
    public function boot(Bootstrap $bootstrap) {
    }
}
