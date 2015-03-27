var KodiCMS = require('kodicms-gulp');

KodiCMS(function(mix) {
	// To run script use
	// gulp --backend --production
	if(KodiCMS.config.isBackend)
		// Backend mix
		mix
			.less('common.less')
			.scripts([
				'cms/media/libs/bootstrap-3.3.1/dist/js/bootstrap.js',
				'cms/media/libs/pnotify/jquery.pnotify.min.js',
				'cms/media/libs/select2/select2.min.js',
				'cms/media/libs/dropzone/min/dropzone.min.js',
				'cms/media/libs/fancybox/jquery.fancybox.pack.js',
				'cms/media/libs/datepicker/jquery.datetimepicker.min.js',
				'cms/media/libs/underscore-min.js',
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
