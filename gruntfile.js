'use strict';
module.exports = function( grunt ) {
	grunt.initConfig({
		pkg: grunt.file.readJSON( 'package.json' ),
		clean: {
			scripts: [
				'dist/js/script.js',
				'dist/js/script.min.js'
			],
			stylesheets: [
				'dist/css/style.css'
			]
		},
		imagemin : {
			dynamic : {
				files : [{
					expand : true, // Enable dynamic expansion
					cwd : 'img/src', // source images (not compressed)
					src : ['**/*.{png,jpg,gif}'], // Actual patterns to match
					dest : 'dist/img' // Destination of compressed files
				}]
			}
		}, //end imagemin
		concat: {
			dist: {
				src: [
					'js/*.js'								
				],
				dest: 'dist/js/script.js'
			}
		},

		uglify: {
			options: {
				preserveComments: 'some',
				report: 'min'
			},
			dist: {
				files: {
		            'dist/js/script.min.js': '<%= concat.dist.dest %>'
		        }
			}
		},

		sass : {
			dist : {
				files : {
					'dist/css/style.css' : 'sass/style.scss'
				}
			}
		}, //end of sass
		postcss: {
      options: {
          map: {inline: false, // save all sourcemaps as separate files...
				},
        processors: [
          require('autoprefixer')(), // add vendor prefixes
		   		require('cssnano')() // minify the result
        ]
      },
        dist: {
            src: 'dist/css/style.css'
        }
    },
		watch: {
			scripts: {
				files: ['js/*.js'],
				tasks: ['scripts'],
				options : {
					spawn : false
				}
			},
			images : {
				files : ['img/src/**/*.{png,jpg,gif}'],
				tasks : ['newer:imagemin']
			}, // watch images added to src
			stylesheets: {
				files: ['sass/**/*.scss'],
				tasks: ['stylesheets'],
				options : {
					spawn : false
						}
			}
		},
		browserSync : {
			dev : {
				bsFiles : {
					src : ['dist/css/*.css', 'img/*.*', 'dist/js/script.min.js', '*.php', 'inc/*.php','!.sass-cache']
				},
				options: {
                    watchTask: true,
                    debugInfoe: true,
					logConnections: true,
					notify: true,
					proxy: "localhost/projekty/<%= pkg.textdomain %>"
                }
			}
		},
		grunt : {
				files : ['gruntfile.js']
			}

	});

	grunt.loadNpmTasks( 'grunt-contrib-clean' );
	grunt.loadNpmTasks( 'grunt-contrib-concat' );
	grunt.loadNpmTasks( 'grunt-contrib-uglify' );
	grunt.loadNpmTasks( 'grunt-contrib-sass' );
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks( 'grunt-text-replace' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.loadNpmTasks( 'grunt-contrib-imagemin' );
	grunt.loadNpmTasks('grunt-newer');
	grunt.loadNpmTasks('grunt-browser-sync');	

	grunt.registerTask( 'scripts', [
		'clean:scripts',
		'concat',
		'uglify'
	]);

	grunt.registerTask( 'stylesheets', [
		'clean:stylesheets',
		'sass',
		'postcss:dist'
	]);

	grunt.registerTask( 'default', [
		'browserSync',
		'watch'
	]);

	grunt.registerTask( 'build', [
		'scripts',
		'stylesheets'
	]);

	grunt.registerTask( 'setup', [
		'bower-install',
		'build'
	]);

	grunt.registerTask( 'bower-install', function() {
		var done = this.async();
		var bower = require( 'bower' ).commands;
		bower.install().on( 'end', function( data ) {
			done();
		}).on( 'data', function( data ) {
			console.log( data );
		}).on( 'error', function( err ) {
			console.error( err );
			done();
		});
	});
};