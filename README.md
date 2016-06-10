# BTK Starter plugin for Craft CMS

Installs some of the plugins I find helpful for developing new craft sites.

## Installation

You probably don't want to install this. If you do you'll need to work it out yourself, a good start would be to put all the files in here in a btkstarter folder in your craft/plugins directory. I'm not saying you should so this.

## How to use

Do not install this plugin on anything that's not a local dev machine, like a Homestead VM or something. 
This runs php's `exec()` function so you'll need to make sure that's not turned off too. This is also the reason you shouldn't be using this in production. 
The VM needs to have svn installed `sudo apt-get install subversion` if it's missing.

This plugin simply pulls in a bunch of other plugins into a craft setup. The current plugins it pulls in are:

* Inspector: Debug stuff in the templates - https://github.com/amacneil/craft-inspector
* Expanded Singles: Show singles in the menu rather than in a dropdown thing - https://github.com/engram-design/ExpandedSingles
* Inventory: Shows where fields are being used - https://github.com/lindseydiloreto/craft-inventory
* Relabel: Reuse craft fields but change the label/helper text on a per-entry type basis - https://github.com/benjamminf/craft-relabel
* Quick Field: Add new fields when in the section layout drag n drop editor - https://github.com/benjamminf/craft-quick-field
* Reasons: Conditionally show or hide fields - https://github.com/mmikkel/Reasons-Craft
* Supertables: Table fields with extraa stuff - https://github.com/engram-design/SuperTable
* Guest Entries: Create entries while not logged in - https://github.com/pixelandtonic/GuestEntries
* Element API: Make JSON REST APIs - https://github.com/pixelandtonic/ElementAPI
* Image Resizer: Resize images on upload - https://github.com/engram-design/ImageResizer
* Sitemap: Makes sitemap.xml files - https://github.com/joshuabaker/craft-sitemap
* Retour: Redirect legacy URLs- https://github.com/nystudio107/retour


## BTK Starter Changelog

### 1.0.0 -- 2016.06.10

* Initial release

Brought to you by [Billy Fagan](http://billyfagan.co.uk)