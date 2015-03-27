var KodiCMS = require('kodicms-gulp');

KodiCMS(function(mix) {
	// To run script use
	// gulp --backend --production
	if(KodiCMS.config.isBackend)
		// Backend mix
		mix
			.less('common.less')
			.scripts([
				'cms/media/js/core.js',
				'cms/media/js/backend.js'
			], null, './');
	else {

		// Frontend mix
		// mix
		// 		.less('app.less') // public/less/app.less -> public/css/app.css
		//		.scripts([
		// 			'script.js' // public/js/script.js
		// 		]) -> public/js/all.js

	}
});
