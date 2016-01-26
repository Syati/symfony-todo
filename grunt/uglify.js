module.exports = {
    production: {
        expand : true,
        cwd    : '<%= settings.getJsDir() %>',
        src    : '<%= settings.getJsSrc() %>',
        dest   : '<%= settings.getJsDestDir() %>',
        ext    : '<%= settings.jsExt %>'
    }
};

