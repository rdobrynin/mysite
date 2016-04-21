requirejs.config({
    "paths": {
        "jquery": "/bower_components/jquery/dist/jquery.min",
        "jquery_ui" : "/bower_components/jquery-ui/jquery-ui.min",
        "jquery_validation" : "/bower_components/jquery-validation/dist/jquery.validate.min",
        "handlebars" : "/bower_components/handlebars/handlebars.min",
        "placeholder" : "/bower_components/jquery-html5-placeholder-shim/jquery.html5-placeholder-shim",
        "dom_ready" : "/bower_components/domReady/domReady"

    },
    shim: {
        jquery_ui: {
            deps:['jquery'],
            exports:"jquery_ui"
        },
        jquery_validation: {
            deps:['jquery'],
            exports:"jquery_validation"
        },
        placeholder: {
            deps:['jquery'],
            exports:"placeholder"
        },
        handlebars: {
            deps:['handlebars'],
            exports:"handlebars"
        }

    }

});



require(['jquery', 'dom_ready', 'authenticate'], function ($, auth) {
   return auth;
});

require(['jquery','dom_ready','module_test'], function ($, module_test) {
    return module_test;
});

