var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
    	'global/plugins/select2/css/select2.min.css',
    	'global/plugins/select2/css/select2-bootstrap.min.css',
    	'global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css',
    	'global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
    	'global/plugins/bootstrap/css/bootstrap.min.css',
    	'global/plugins/uniform/css/uniform.default.css',
    	'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'pages/css/login-4.min.css',
    	'global/css/components-md.min.css',
    	'global/css/plugins-md.min.css',
    	'global/plugins/morris/morris.css',
    	'global/plugins/jqvmap/jqvmap/jqvmap.css',
    	'pages/css/profile.min.css',
        'global/plugins/fullcalendar/fullcalendar.min.css',
    	'global/plugins/datatables/datatables.min.css',
        'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',
    	'global/plugins/bootstrap-fileinput/bootstrap-fileinput.css',
    	'global/plugins/dropzone/dropzone.min.css',
    	'global/plugins/dropzone/basic.min.css',
    	'layouts/layout4/css/layout.css',
    	'layouts/layout4/css/themes/light.css',
    	'layouts/layout4/css/custom.min.css',
    	'global/plugins/sweetalert/sweetalert.css',
        'menu_css.css'
    	]);

    mix.scripts([ 
    	'global/plugins/jquery-ui/jquery-ui.min.js',
    	'global/plugins/bootstrap/js/bootstrap.min.js',
    	'global/plugins/js.cookie.min.js',
    	'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
    	'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    	'global/plugins/jquery.blockui.min.js',
    	'global/plugins/uniform/jquery.uniform.min.js',
    	'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
    	'global/plugins/select2/js/select2.full.min.js',
    	'global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
    	'global/plugins/moment.min.js',
    	'global/plugins/morris/morris.min.js',
    	'global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
    	'global/plugins/morris/raphael-min.js',
    	'global/plugins/counterup/jquery.waypoints.min.js',
    	'global/plugins/counterup/jquery.counterup.min.js',
    	'global/plugins/flot/jquery.flot.min.js',
    	'global/plugins/flot/jquery.flot.resize.min.js',
    	'global/plugins/flot/jquery.flot.categories.min.js',
    	'global/plugins/jquery.sparkline.min.js',
        'global/plugins/fullcalendar/fullcalendar.min.js',
    	'pages/scripts/form-samples.min.js',
    	'global/plugins/dropzone/dropzone.min.js',
    	'global/scripts/app.min.js',
    	'pages/scripts/components-date-time-pickers.min.js',
    	'global/plugins/select2/js/select2.min.js',
    	'pages/scripts/dashboard.min.js',
    	'pages/scripts/form-dropzone.min.js',
    	'layouts/layout4/scripts/layout.min.js',
    	'layouts/layout4/scripts/demo.min.js',
    	'layouts/global/scripts/quick-sidebar.min.js',
    	'global/plugins/jquery.maskMoney-min.js',
    	'global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js',
    	'global/plugins/jquery.input-ip-address-control-1.0.min.js',
    	'global/plugins/sweetalert/sweetalert.min.js',
    	'global/scripts/datatable.js',
    	'global/plugins/datatables/datatables.min.js',
    	'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
    	'global/scripts/app.min.js',
        'pages/scripts/table-datatables-fixedheader.min.js',
    	'global/plugins/bootstrap-fileinput/bootstrap-fileinput.js',
    	'pages/scripts/form-input-mask.min.js',
    	'pages/scripts/ui-blockui.js',
        'custom_script.js',
        'win_class.js'
    	],'public/js');

    mix.scripts([
        'global/plugins/jquery-validation/js/jquery.validate.min.js',
        'global/plugins/jquery-validation/js/additional-methods.min.js',
        'global/plugins/select2/js/select2.full.min.js',
        'global/plugins/backstretch/jquery.backstretch.min.js',
        'pages/scripts/login-4.min.js'
        ],'public/login');
});
