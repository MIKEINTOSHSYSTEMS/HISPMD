<?php

/**
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\LanguagesManager\Commands;

use Piwik\Development;
use Piwik\Plugin\ConsoleCommand;

/**
 */
abstract class TranslationBase extends ConsoleCommand
{
    public function isEnabled()
    {
        return Development::isEnabled();
    }
}
