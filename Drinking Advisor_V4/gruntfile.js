module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        yuidoc: {
            compile: {
                name: '<%= pkg.name %>',
                description: '<%= pkg.description %>',
                version: '<%= pkg.version %>',
                options: {
                    paths: 'js/*.js',
                    outdir: 'docs'
                }
            }
       },
        jasmine: {
            compile: {
                src: 'FindInfo.js',
                options: {
                    specs: 'test/*Spec.js',
                    //template: 'test.tmpl',
                    //helpers: 'test/helpers/*.js',
                    keepRunner: true
                }
            }
        },
        /*uglify: {
            compile: {
                files: {
                    'js/out.js': ['src/init.js', 'src/demo.js']
                }
            }
        },*/
        clean:
            ['docs', 'js']


    });
 
    // Load the plugins
    grunt.loadNpmTasks('grunt-contrib-yuidoc');
    grunt.loadNpmTasks('grunt-contrib-jasmine');
    //grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-clean');

    // Default task(s).
    grunt.registerTask('default', ['yuidoc', 'jasmine']);

};