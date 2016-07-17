module.exports = {
  options: {
    livereload: true
  },
  template: {
    files: ['app/Resources/views/**/*.twig']
  },
  less: {
    files: ['web/assets/css/*.less'],
    tasks: ['less:staging']
  },
  rsync: {
    files: ['web/assets/img/**/*',
            'web/assets/js/**/*.js'
           ],
    tasks: ['rsync:ci']
  }
};

