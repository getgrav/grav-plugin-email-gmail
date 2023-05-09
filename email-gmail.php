<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class EmailGmailPlugin
 * @package Grav\Plugin
 */
class EmailGmailPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'onEmailEngines'       => ['onEmailEngines', 0],
            'onEmailTransportDsn'  => ['onEmailTransportDsn', 0],
        ];
    }

    /**
     * Composer autoload
     *
     * @return ClassLoader
     */
    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    public function onEmailEngines(Event $e)
    {
        $engines = $e['engines'];
        $engines->gmail = 'Google/Gmail';
    }

    public function onEmailTransportDsn(Event $e)
    {
        $engine = $e['engine'];
        if ($engine === 'gmail') {
            $options = $this->config->get('plugins.email-gmail');
            $dsn = "gmail+smtp://";
            $dsn .= urlencode($options['username'] ?? '') .":".urlencode($options['password'] ?? '');
            $dsn .= "@default";
            $e['dsn'] = $dsn;
            $e->stopPropagation();
        }
    }
}
