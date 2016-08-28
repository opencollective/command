<?php namespace Tarsana\Command\Commands;

use Tarsana\Command\SubCommand;

/**
 * The default subcommand to show version of a command.
 */
class VersionCommand extends SubCommand {

    protected function init ()
    {
        $this
            ->name('Version')
            ->version('0.0.1')
            ->description('Shows the version of the command');
    }

    protected function execute ()
    {
        $c = $this->parent();
        $this->console
             ->green()->inline($c->name())
             ->white()->inline(' version ')
             ->yellow()->out($c->version());
    }
}
