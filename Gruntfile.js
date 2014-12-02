"use strict";
module.exports = function (grunt) {

 var pkg = require('./package.json');

 require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

 grunt.loadNpmTasks('grunt-contrib-sass');
 grunt.loadNpmTasks('grunt-contrib-watch');
 grunt.loadNpmTasks('grunt-autoprefixer');
 grunt.loadNpmTasks('grunt-notify');
 grunt.loadNpmTasks('grunt-contrib-compress');

 grunt.task.run('notify_hooks');

 grunt.registerTask('default', ['watch', 'sass', 'autoprefixer', 'compress']);

 grunt.initConfig({

  sass: {

   dist: {
    options: {
     style: 'compressed',
     loadPath: require('node-bourbon').includePaths
    },
    files: {
     'assets/css/main.css': 'assets/sass/main.sass'
    }
   }

  },

  autoprefixer: {

   options: {
    browsers: ['last 2 versions', 'ie 8', 'ie 9'],
    diff: true,
    map: true
   },
   multiple_files: {
    src: 'assets/css/main.css',
    dest: 'assets/css/main.css'
   },

  },


  notify_hooks: {
   options: {
    enabled: true,
    title: 'Grunt',
    success: false,
    duration: 3
   }
  },


  notify: {
   sass: {
    options: {
     title: 'SASS',
     message: 'Sass compilado mi perrito!'
    }
   },
   prefix: {
    options: {
     title: 'PREFIX',
     message: 'Prefijos agregados mi pez!'
    }
   },
   compress: {
    options: {
     title: 'BACKUP',
     message: 'Backup listo mi lince!'
    }
   },
  },

  compress: {
   main: {
    options: {
     archive: 'backup.zip'
    },
    files: [
     {
      expand: true,
      cwd: 'assets/',
      src: ['**'],
      dest: ''
     },
    ]
   }
  },

  watch: {

   css: {
    files: ['assets/sass/*.sass'],
    tasks: ['sass', 'notify:sass'],
    options: {

    },
   },


   autoprefixer: {
    files: ['assets/css/*.css'],
    tasks: ['autoprefixer', 'notify:prefix'],
    options: {

    }
   },

   compress: {
    files: ['assets/css/*.css'],
    tasks: ['compress', 'notify:compress'],
    options: {

    }
   },


   gruntfile: {
    files: ['Gruntfile.js']
   },

  },

 });

};