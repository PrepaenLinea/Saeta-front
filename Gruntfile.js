module.exports = function(grunt) {

    require('load-grunt-config')(grunt);
    require("load-grunt-tasks")(grunt);
  // Default task(s).
    grunt.registerTask('default', ['compass:dev','watch']);
};