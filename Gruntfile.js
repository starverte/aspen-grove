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
          'style.css': ['style.css']
        }
      }
    }
  });

  // Load plugin tasks.
  grunt.loadNpmTasks('grunt-csscomb');

  // Default task(s).
  grunt.registerTask('default', ['csscomb']);

};
