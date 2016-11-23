<?php
# This file was automatically generated by the MediaWiki 1.26.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Wiki Groupe Nox";
$wgMetaNamespace = "Wiki_Groupe_Nox";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/Symfony/web/WikiNox";

## The protocol and server name to use in fully-qualified URLs

$wgServer = "http://".$_SERVER['HTTP_HOST'];


## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = $wgServer . "\Symfony\web\WikiNox\images\GROUPE_NOX_AVATAR.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "wiki@groupe-nox.com";
$wgPasswordSender = "wiki@groupe-nox.com";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "wikinox";
$wgDBuser = "intranetadmin";
$wgDBpassword = "intranet";

# MySQL specific settings
$wgDBprefix = "wikinox_";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageResize = true;
$wgMaxUploadSize = 1024 * 1024 * 100;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "fr";

$wgSecretKey = "faa40fafb5e03379a8782490d98d554ff79981b542aede4eb7a8ef621cef8c98";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "69b681bf722a7a0b";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['user']['edit']	= false;
$wgGroupPermissions['bureaucrat']['edit']	= false;
$wgGroupPermissions['sysop']['edit']	= true;
$wgGroupPermissions['sysop']['userrights']	= true;
$wgGroupPermissions['publicateur']['edit']	= true;

$wgGroupPermissions['SAP']['edit']	= false;
$wgGroupPermissions['SAP_Publicateur']['edit']	= false;
$wgGroupPermissions['SAP_Publicateur']['userrights']	= true;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'CologneBlue' );
wfLoadSkin( 'Modern' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );


# End of automatically generated settings.
# Add more configuration options below.
wfLoadExtension( 'Gadgets' );

require_once("$IP/extensions/secure-include.php");

# Including local paths requires uncommenting the following line
$wg_include_allowed_features['local'] = true;
$wg_include_allowed_parent_paths = $_SERVER['DOCUMENT_ROOT'];
$wg_include_disallowed_regex = array('/.*LocalSettings.php/', '/.*\.conf/', '/.*\/\.ht/');

# Including remote URLs requires to uncomment the following line
$wg_include_allowed_features['remote'] = true;
$wg_include_allowed_url_regexp = array('/^http:\/\/.*$/');
$wg_include_disallowed_url_regexp = array('/^.*:\/\/intranet/');

$wg_include_allowed_features['highlight'] = true;
$wg_include_allowed_features['iframe'] = true;

// Licence WTFPL 2.0
$wgHooks['BaseTemplateToolbox'][] = 'modifyToolbox';

function modifyToolbox( BaseTemplate $baseTemplate, array &$toolbox ) {

	static $keywords = array( 'WHATLINKSHERE', 'RECENTCHANGESLINKED', 'FEEDS', 'CONTRIBUTIONS', 'LOG', 'BLOCKIP', 'EMAILUSER', 'USERRIGHTS', 'UPLOAD', 'SPECIALPAGES', 'PRINT', 'PERMALINK', 'INFO' );

	$modifiedToolbox = array();

	// Walk in the MediaWiki:Sidebar message, section toolbox
	foreach ( $baseTemplate->data['sidebar']['TOOLBOX'] as $value ) {
		$specialLink = false;

		// Search if the keyword exists
		foreach ( $keywords as $key ) {
			if ( $value['href'] == Title::newFromText($key)->fixSpecialName()->getLinkURL() ) {
				$specialLink = true;

				// This is a keyword, hence add this special link
				if ( array_key_exists( strtolower($key), $toolbox ) ) {
					$modifiedToolbox[strtolower($key)] = $toolbox[strtolower($key)];
					break;
				}
			}
		}

		// This is a normal link
		if ( !$specialLink ) {
			$modifiedToolbox[] = $value;
		}
	}

	$toolbox = $modifiedToolbox;

	return true;
}

$wgUseAjax = true;
require_once("{$IP}/extensions/CategoryTree/CategoryTree.php");

$wgCategoryTreeSidebarRoot = 'Général';
$wgCategoryTreeSidebarOptions = array('mode' => 'all', 'hideroot' => 'on');

// Définition du namespace SAP.
define("NS_SAP", 5500); 
define("NS_SAP_FORUM", 5501); 
$wgExtraNamespaces[NS_SAP] = "SAP";
$wgExtraNamespaces[NS_SAP_FORUM] = "SAP_Forum";

// Extension pour limiter la visualisation/édition des namespaces.
require_once "$IP/extensions/Lockdown/Lockdown.php";

# Limite la visualisation des pages du namespace 'SAP' au membres du groupe 'SAP'.
$wgNamespacePermissionLockdown[NS_SAP]['read'] = array('SAP');

# Limite l'édition des pages du namespace 'SAP' au membres du groupe 'SAP_Publicateur'.
$wgNamespacePermissionLockdown[NS_SAP]['edit'] = array('SAP_Publicateur');

// Plugin d'authentification LDAP.
require_once( "$IP/extensions/LdapAuthentication/LdapAuthentication.php" );
require_once( "$IP/extensions/LdapAuthentication/LdapAutoAuthentication.php" );

// Option for getting debug output from the plugin. 1-3 available. 1 will show
// non-sensitive info, 2 will show possibly sensitive user info, 3+ will show
// sensitive system info. Setting this on a live public site is probably a bad
// idea.
// Default: 0
$wgLDAPDebug = 1;

$wgDebugLogGroups['ldap'] = 'C:/wamp/www/Debug/debug.log';

// The names of one or more domains you wish to use
// These names will be used for the other options, it is freely choosable and not dependent
// on your system. These names will show in the Login-Screen, so it is important that the user 
// understands the meaning.
//
// REQUIRED
//
// Default: none
$wgLDAPDomainNames = array(
  'nox.local'
);

// The fully qualified name of one or more servers per domain you wish to use. If you are
// going to use SSL or StartTLS, it is important that the server names provided here exactly
// match the name provided by the SSL certificate returned by the server; otherwise, you may
// have problems.
// REQUIRED
// Default: none
$wgLDAPServerNames = array(
  'nox.local' => 'SRV-NOX.nox.local'
);

// The type of encryption you would like to use when connecting to the LDAP server.
// Available options are 'tls', 'ssl', and 'clear'
// Default: tls
$wgLDAPEncryptionType = array(
  'nox.local' => 'clear'
);

$wgLDAPSearchStrings = array(
  'nox.local' => "NOX\\USER-NAME"
);

AutoAuthSetup();