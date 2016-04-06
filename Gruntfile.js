module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    csscomb: {
      dist: {
        options: {
          config: '.csscomb.json'
        },
        files: {
          'style.css': ['sass/main.css']
        }
      }
    },
    sass: {
      dist: {
        files: {
          'sass/main.css': 'sass/main.scss'
        }
      }
    },
    usebanner: {
      stylesheet: {
        options: {
          position: 'top',
          banner: '/*\n' +
            'Theme Name: Aspen Grove\n' +
            'Theme URI: https://github.com/starverte/aspen-grove.git\n' +
            'Author: Star Verte LLC\n' +
            'Description: Child theme of Flint. Theme originally developed for Wette Integrative Therapy Inc. for a physical therapy practice website.\n' +
            'Version: <%= pkg.version %>\n' +
            'License: GPLv3\n' +
            'License URI: LICENSE.md\n' +
            'Tags:\n' +
            'Template: flint\n' +
            'Template Version: 1.5.0\n\n' +
            '    Copyright 2015 Star Verte LLC (email : dev@starverte.com)\n\n' +
            '    This program is free software: you can redistribute it and/or modify\n' +
            '    it under the terms of the GNU General Public License as published by\n' +
            '    the Free Software Foundation, either version 3 of the License, or\n' +
            '    (at your option) any later version.\n\n' +
            '    This program is distributed in the hope that it will be useful,\n' +
            '    but WITHOUT ANY WARRANTY; without even the implied warranty of\n' +
            '    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the\n' +
            '    GNU General Public License for more details.\n\n' +
            '    You should have received a copy of the GNU General Public License\n' +
            '    along with this program.  If not, see <http://www.gnu.org/licenses/>.\n' +
            '*/\n',
          linebreak: true
        },
        files: {
          src: [ 'style.css' ]
        }
      }
    }
  });

  // Load plugin tasks.
  grunt.loadNpmTasks('grunt-banner');
  grunt.loadNpmTasks('grunt-csscomb');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task(s).
  grunt.registerTask('default', ['sass','csscomb','usebanner']);

};
