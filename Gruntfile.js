var stylusDir = 'stylus';
module.exports = function(grunt){
	// Project configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		stylus: {
			compile: {
				options: {
					banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
					compress: false,
					paths: ['css'],
					'include css': true
				},
				files: {
					//'css/init-main.css': stylusDir + '/stylus.styl'
				}
			}
		},

		watch: {
			php: {
				files: ['index.php'],
		        options: {
		            livereload: true
		        }
			},
			css: {
				files: ['css/main.css'],
				files: ['css/bootstrap.min.css'],
				files: ['css/font-awesome.css'],
				files: ['css/plugins.css'],
				files: ['css/theme.css'],
		        options: {
		        	banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
		            livereload: true
		        }
			},
			stylusDir: {
				files: [stylusDir + '/**/*.styl', 'css/**/*.css'],
				tasks: ['stylus'],
				options: {
					interrupt: true
				}
			}
		}

	});

	// Cargamos el módulo de Stylus
	grunt.loadNpmTasks('grunt-contrib-stylus');
	grunt.loadNpmTasks('grunt-contrib-watch');


	// Declaramos una función default que solo imprime el nombre del paquete
	grunt.registerTask('default', function(){
		grunt.log.writeln(grunt.config.get("pkg").name);
	});
	//Compile Javascript Client-Side and Processing Stylus to CSS
	grunt.registerTask('compile', ['stylus']);

	//Run the server and watch for file changes
	grunt.registerTask('server', ['compile', 'watch']);

	//Default task(s)
	grunt.registerTask('default', ['watch']);
}
