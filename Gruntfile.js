/* global module, require */
module.exports = function (grunt) {

	var build = grunt.option('build') || 'SNAPSHOT';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
		build: build,
		jsdoc: {
			production: {}
		}
    });

    // TODO: this might be replaced by https://www.npmjs.org/package/grunt-jsdoc
    grunt.registerMultiTask('jsdoc', 'Generates the public module JS-API using jsDoc', function () {
        var exec = require('child_process').exec;
        var done = this.async();
        var cmd = grunt.template.process('node_modules/.bin/jsdoc -c ./config/jsdoc.json');

        exec(cmd, function (error) {
            if (!error) {
                grunt.log.ok();
            } else {
                grunt.fail.warn(error);
            }
            done();
        });
    });

	grunt.registerTask('build', [
		'jsdoc:production'
	]);
};
