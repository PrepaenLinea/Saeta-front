module.exports = {
    dev: {                   // Target
      options: {              // Target options
        sassDir: 'sass/',
        cssDir: 'build/css/',
        environment: 'development',
      }
    },
    dist: {                   // Target
      options: {              // Target options
        sassDir: 'sass/',
        cssDir: 'build/css/',
        environment: 'production',
      }
    }
  }