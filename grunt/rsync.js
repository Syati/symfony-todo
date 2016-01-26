module.exports = {
    development: {
        options: {
            args      : ["--verbose", "--archive", "--checksum", "--delete"],
            exclude   : ["/css/",      // less
                         "/vendor/",   // library
                         ".gitkeep"
                        ],
            src :  '<%= settings.getAssetsDir() %>' + '/',
            dest : '<%= settings.getStaticDir() %>'
        }
    },
    production: {
        options: {
            args      : ["--verbose", "--archive", "--checksum", "--delete"],
            exclude   : ["*.js",       // because of using uglify
                         "*.less",     // less
                         "/vendor/",   // library
                         ".gitkeep"
                        ],
            src :  '<%= settings.getAssetsDir() %>' + '/',
            dest : '<%= settings.getStaticDir() %>'
        }
    }
};
