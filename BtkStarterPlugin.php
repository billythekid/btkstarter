<?php
/**
 * BTK Starter plugin for Craft CMS
 * Installs the plugins I find helpful for developing new craft sites.
 * --snip--
 * Craft plugins are very much like little applications in and of themselves. We’ve made it as simple as we can,
 * but the training wheels are off. A little prior knowledge is going to be required to write a plugin.
 * For the purposes of the plugin docs, we’re going to assume that you know PHP and SQL, as well as some semi-
 * advanced concepts like object-oriented programming and PHP namespaces.
 * https://craftcms.com/docs/plugins/introduction
 * --snip--
 *
 * @author    Billy Fagan
 * @copyright Copyright (c) 2016 Billy Fagan
 * @link      http://billyfagan.co.uk
 * @package   BtkStarter
 * @since     1.0.0
 */

namespace Craft;

class BtkStarterPlugin extends BasePlugin
{
    /**
     * Called after the plugin class is instantiated; do any one-time initialization here such as hooks and events:
     * craft()->on('entries.saveEntry', function(Event $event) {
     *    // ...
     * });
     * or loading any third party Composer packages via:
     * require_once __DIR__ . '/vendor/autoload.php';
     *
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * Returns the user-facing name.
     *
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('BTK Starter');
    }

    /**
     * Plugins can have descriptions of themselves displayed on the Plugins page by adding a getDescription() method
     * on the primary plugin class:
     *
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Installs the plugins I find helpful for developing new craft sites.');
    }

    /**
     * Plugins can have links to their documentation on the Plugins page by adding a getDocumentationUrl() method on
     * the primary plugin class:
     *
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/billythekid/btkstarter/blob/master/README.md';
    }

    /**
     * Plugins can now take part in Craft’s update notifications, and display release notes on the Updates page, by
     * providing a JSON feed that describes new releases, and adding a getReleaseFeedUrl() method on the primary
     * plugin class.
     *
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/billythekid/btkstarter/master/releases.json';
    }

    /**
     * Returns the version number.
     *
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * As of Craft 2.5, Craft no longer takes the whole site down every time a plugin’s version number changes, in
     * case there are any new migrations that need to be run. Instead plugins must explicitly tell Craft that they
     * have new migrations by returning a new (higher) schema version number with a getSchemaVersion() method on
     * their primary plugin class:
     *
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * Returns the developer’s name.
     *
     * @return string
     */
    public function getDeveloper()
    {
        return 'Billy Fagan';
    }

    /**
     * Returns the developer’s website URL.
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://billyfagan.co.uk';
    }

    /**
     * Returns whether the plugin should get its own tab in the CP header.
     *
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * Called right before your plugin’s row gets stored in the plugins database table, and tables have been created
     * for it based on its records.
     */
    public function onBeforeInstall()
    {
    }

    /**
     * Called right after your plugin’s row has been stored in the plugins database table, and tables have been
     * created for it based on its records.
     */
    public function onAfterInstall()
    {
    }

    /**
     * Called right before your plugin’s record-based tables have been deleted, and its row in the plugins table
     * has been deleted.
     */
    public function onBeforeUninstall()
    {
    }

    /**
     * Called right after your plugin’s record-based tables have been deleted, and its row in the plugins table
     * has been deleted.
     */
    public function onAfterUninstall()
    {
    }

    /**
     * Defines the attributes that model your plugin’s available settings.
     *
     * @return array
     */
    protected function defineSettings()
    {

        return [
            'plugins' => [
                AttributeType::Mixed, 'default' => [
                    [
                        "name"             => "Inspector",
                        "pluginFolderName" => "inspector",
                        "downloadUrl"      => "https://github.com/amacneil/craft-inspector/trunk/",
                        "description"      => "Debug stuff in the templates - https://github.com/amacneil/craft-inspector",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Expanded Singles",
                        "pluginFolderName" => "expandedsingles",
                        "downloadUrl"      => "https://github.com/engram-design/ExpandedSingles/trunk/expandedsingles",
                        "description"      => "Show singles in the menu rather than in a dropdown thing - https://github.com/engram-design/ExpandedSingles",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Inventory",
                        "pluginFolderName" => "inventory",
                        "downloadUrl"      => "https://github.com/lindseydiloreto/craft-inventory/trunk/inventory",
                        "description"      => "Shows where fields are being used - https://github.com/lindseydiloreto/craft-inventory",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Relabel",
                        "pluginFolderName" => "relabel",
                        "downloadUrl"      => "https://github.com/benjamminf/craft-relabel/trunk/relabel",
                        "description"      => "Reuse craft fields but change the label/helper text on a per-entry type basis - https://github.com/benjamminf/craft-relabel",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Quick Field",
                        "pluginFolderName" => "quickfield",
                        "downloadUrl"      => "https://github.com/benjamminf/craft-quick-field/trunk/quickfield",
                        "description"      => "Add new fields when in the section layout drag n drop editor - https://github.com/benjamminf/craft-quick-field",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Reasons",
                        "pluginFolderName" => "reasons",
                        "downloadUrl"      => "https://github.com/mmikkel/Reasons-Craft/trunk/reasons",
                        "description"      => "Conditionally show or hide fields - https://github.com/mmikkel/Reasons-Craft",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Supertables",
                        "pluginFolderName" => "supertable",
                        "downloadUrl"      => "https://github.com/engram-design/SuperTable/trunk/supertable",
                        "description"      => "Table fields with extraa stuff - https://github.com/engram-design/SuperTable",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Guest Entries",
                        "pluginFolderName" => "guestentries",
                        "downloadUrl"      => "https://github.com/pixelandtonic/GuestEntries/trunk/guestentries",
                        "description"      => "Create entries while not logged in - https://github.com/pixelandtonic/GuestEntries",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Element API",
                        "pluginFolderName" => "elementapi",
                        "downloadUrl"      => "https://github.com/pixelandtonic/ElementAPI/trunk/elementapi",
                        "description"      => "Make JSON REST APIs - https://github.com/pixelandtonic/ElementAPI",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Image Resizer",
                        "pluginFolderName" => "imageresizer",
                        "downloadUrl"      => "https://github.com/engram-design/ImageResizer/trunk/imageresizer",
                        "description"      => "Resize images on upload - https://github.com/engram-design/ImageResizer",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Sitemap",
                        "pluginFolderName" => "sitemap",
                        "downloadUrl"      => "https://github.com/joshuabaker/craft-sitemap/trunk/sitemap",
                        "description"      => "Makes sitemap.xml files - https://github.com/joshuabaker/craft-sitemap",
                        "checked"          => false,
                    ],
                    [
                        "name"             => "Retour",
                        "pluginFolderName" => "retour",
                        "downloadUrl"      => "https://github.com/nystudio107/retour/trunk",
                        "description"      => "Redirect legacy URLs- https://github.com/nystudio107/retour",
                        "checked"          => false,
                    ],
                ],
            ],
        ];
    }

    /**
     * Returns the HTML that displays your plugin’s settings.
     *
     * @return mixed
     */
    public function getSettingsHtml()
    {
        return craft()->templates->render('btkstarter/BtkStarter_Settings', array(
            'settings' => $this->getSettings(),
        ));
    }

    /**
     * If you need to do any processing on your settings’ post data before they’re saved to the database, you can
     * do it with the prepSettings() method:
     *
     * @param mixed $settings The Widget's settings
     * @return mixed
     */
    public function prepSettings($settings)
    {
        $installing = array_filter($settings);
        foreach ($installing as $setting)
        {
            $setting = explode(' ', $setting);
            $command = "svn checkout {$setting[0]} " . craft()->path->pluginsPath . "{$setting[1]}";
            exec($command);
        }
        return $settings;
    }

}