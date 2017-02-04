CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * License
 * Maintainers


INTRODUCTION
------------

This Dropbox app will help you to create a backup of your WHMCS
database and store it in your Dropbox account. Therefore, your database
will never be lost.


REQUIREMENTS
------------

 * PHP 5 or later
 * ionCube Loader
 * WHMCS 5 or later
 * PHP OAuth extension
 * `<WHMCS folder>/modules/addons/br_dropbox_backup/dbs` must be writable


INSTALLATION
------------

1. Unpack the module and place in into WHMCS addons directory. The
directory should look like this: `modules/addons/br_dropbox_backup`

2. Activate the addon in Setup >> Addon Modules

3. Click on "Configure" button and enter your software license key.
(This is only applied for PRO version).

4. Visit the module and connect to your Dropbox account:

    1. Click on Addons >> Busyrack Dropbox Backup

    2. At the first time you enter the module, it will ask you to connect
    to your Dropbox account and grant permisions to upload backup files
    to there.

    3. Once your Dropbox account is connected, you will be able to create
    backup of WHMCS database and upload to Dropbox with just one single
    click.


LICENSE
-------

This source file is subject to BusyRack Development license that is available
through the world-wide-web at the following URI:

https://www.busyrack.com/license.txt

If you did not receive a copy of the License and are unable to obtain it
through the web, please send a note to license@busyrack.com so we can mail you
a copy immediately.


MAINTAINERS
-----------

Current maintainers:

 * Tom Tran <tom@busyrack.com>

This project is maintained by BusyRack Team.
