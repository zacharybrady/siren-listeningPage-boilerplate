module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    //Watching Functionality
    watch: {
      options: {
        livereload: true,
      },
      scripts: {
        files: ['js/jsSrc/*.js','js/jsSrc/*/*.js'],
        tasks: ['jshint', 'uglify'],
        options: {
          spawn: false
        }
      },
      scss: {
        files: ['css/scss/*.scss','css/scss/*/*.scss'],
        tasks: ['sass', 'postcss' ],
        options: {
          spawn: false,
        }
      }
    },

     //JS Hinting
    jshint: {
      all: ['Gruntfile.js', 'js/jsSrc/global.js', 'js/jsSrc/listen.js']
    },

    //Uglify for JS
    uglify: {
      dist:{
        files:{
          'js/global.min.js' : [ 'js/jsSrc/global.js'],
          'js/listen.min.js' : ['js/jsSrc/libs/jquery.js','js/jsSrc/plugins/jquery-jplayer/jquery.jplayer.js', 'js/jsSrc/plugins/ttw-music-player.js', 'js/jsSrc/myplaylist.js', 'js/jsSrc/listen.js']
        }
      }
    },

    //SASS
    sass: {                              
      dist: {                            
        options: {                   
          style: 'expanded',
          sourcemap: 'none'
        },
        files: {                        
          'css/style.css': 'css/scss/style.scss'
        }
      }
    },

    postcss: {
      options: {
        map: false, // inline sourcemaps

        processors: [
          require('autoprefixer')({browsers: 'last 4 versions'}),
          require('css-mqpacker')(),
          require('cssnano')()
        ]
      },
      dist: {
        files: [{
          src: ['css/*.css']
        }]
      }
    }

    
  });

  // Load up pluggins
  grunt.loadNpmTasks('grunt-contrib-watch'); //Update watcher
  grunt.loadNpmTasks('grunt-contrib-uglify'); //Uglify JS
  grunt.loadNpmTasks('grunt-contrib-jshint'); //JS Hint
  grunt.loadNpmTasks('grunt-postcss'); //Post CSS
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task(s).
  grunt.registerTask('default', ['sass', 'postcss' ]);

};