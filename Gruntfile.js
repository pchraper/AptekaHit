'use strict';

module.exports = function (grunt) {
	grunt.initConfig({
		'ftp-deploy': {
		  build: {
			auth: {
			  host: 'ftp.cluster031.hosting.ovh.net',
			  port: 21,
			  authKey: 'ftppass1'
			},
			src: './',
			dest: './',
			exclusions: ['.ftppass', '.gitignore', '.htaccess', '*.log', 'npm-debug.log.*', '.sass-cache/', './docs/phpdoc-sf/', 'composer.lock', 
				'./admin*',	'./modules', './cache/*', './download/*', './img/*', './log/*', './upload/*', './vendor/*', './translations/*', './mails/*', './bower_components/*', './node_modules/*',
				'./config/settings.inc.php', './config/settings.old.php', './config/xml', '!./config/xml/themes/default.xml', './var/', './bin/', 
				'./tests/Selenium/settings.js', './tests/Selenium/errorShots/', './tests/Selenium/errorDumps/', 
				'./themes/*/config/settings_*.json', './themes/*/cache/*', './themes/default-bootstrap/lang/*', './hemes/default-bootstrap/modules/*/translations/*.php', './themes/default-bootstrap/mails/*', './themes/default-bootstrap/modules/*/mails/*',
				'./app/config/parameters.old.yml', './app/config/config.php', './app/bootstrap.php.cache', './app/cache/*', './app/Resources/translations/*', './app/test/cache/*', './app/config/parameters.yml', './app/config/parameters.php', './app/logs/*', './app/phpunit.xml',
				'./web/bundles/', './web/css/', './web/js/']
		  }
		}
	});
	
	grunt.loadNpmTasks('grunt-ftp-deploy');
};