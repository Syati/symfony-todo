module.exports = {
    development: {
        options:{
            targetDir: '<%= settings.getVendorDir() %>',
            copy: true,
            install: true,
            verbose: true,
            cleanTargetDir: false,
            cleanBowerDir: false,
            layout: function (type, component) {
                if (type === 'css') {
                    return 'css';
                } else if (type === 'css/images') {
                    return 'css/images';
                } else {
                    return 'js';
                }
            }
        }
    },
    production: {
        options:{
            targetDir: '<%= settings.getVendorDir() %>',
            copy: true,
            install: true,
            verbose: true,
            cleanTargetDir: true,
            cleanBowerDir: false,
            bowerOptions: {
                production: true
            },
            layout: function (type, component) {
                if (type === 'css') {
                    return 'css';
                } else if (type === 'css/images') {
                    return 'css/images';
                } else {
                    return 'js';
                }
            }
        }
    }
};
