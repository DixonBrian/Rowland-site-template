
const gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass'));
    sourcemaps = require("gulp-sourcemaps"),
    browserSync = require('browser-sync').create();
concat = require("gulp-concat"),
    source = "./sass/";
sass.compiler = require('node-sass'),
    gutil = require('gulp-util'),
    browserify = require('gulp-browserify'),
    stylish = require('jshint-stylish'),
    jshint = require('gulp-jshint'),
    w3cjs = require('gulp-w3cjs'),
    compass = require('gulp-compass'),
    connect = require('gulp-connect'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    path = require('path');


var env,
    jsSources,
    sassSources,
    outputDir,
    sassStyle;


proxy = "https://localhost:55003",
  
url = 'https://rowland-clone.lndo.site/ ', // Local Development URL for BrowserSync. Change as-needed.

    //define working envirnoment and compiling settings. Use developement or production
    env = 'development';

if (env == 'development') {
    dest = 'builds/development/';
    sassStyle = 'expanded';
} else {
    dest = 'builds/production/';
    sassStyle = 'compressed';
}

jsSources = ['js/vendor/vendors.js'];
sassSources = ['sass/style.scss'];


function js() {
    return gulp.src(["./js/**/*.js", "!js/customizer.js"])
        .pipe(concat('custom.js'))
        .pipe(gulp.dest(dest + 'js/'));
}

function styles() {
    return gulp
        .src("sass/style.scss")
        .pipe(sass({
            includePaths: [
                'node_modules/foundation-sites/foundation',
                'sass/style.scss',
            ]
        }))
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                sourcemap: true,
                outputStyle: sassStyle
            }).on("error", sass.logError)
        )
        .pipe(gulp.dest(dest + "css"))
        .pipe(browserSync.stream());

}

function watch() {
    gulp.watch(dest + "js/**/*.js", js).on("change", browserSync.reload);
    gulp.watch(source + "**/*.scss", styles).on("change", browserSync.reload);
    browserSync.reload();
}

function server() {

    browserSync.init({
        files: ['**/*.php', 'sass/**/*.scss', 'sass/**/**/**.scss', '**/*.scss'],
        // Read here http://www.browsersync.io/docs/options/
        proxy: url,

         port: 55038,

        // Tunnel the Browsersync server through a random Public URL
        // tunnel: true,

        // Attempt to use the URL "http://my-private-site.localtunnel.me"
        // tunnel: "ppress",

        // Inject CSS changes
        injectChanges: false,

    });



    gulp.watch(source + "**/*.scss", styles).on("change", browserSync.reload);
    gulp.watch(dest + "js/**/*.js", js).on("change", browserSync.reload);


}

var build = gulp.series(js, styles, server, watch);

gulp.task("default", build);
