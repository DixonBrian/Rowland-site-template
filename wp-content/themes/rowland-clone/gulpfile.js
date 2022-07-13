
const gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require("gulp-sourcemaps"),
    browserSync = require('browser-sync').create();
concat = require("gulp-concat"),
    source = "./sass/";
sass.compiler = require('node-sass'),
    gutil = require('gulp-util'),
    browserify = require('gulp-browserify'),
    stylish = require('jshint-stylish'),
    w3cjs = require('gulp-w3cjs'),
    compass = require('gulp-compass'),
    connect = require('gulp-connect'),
    gulpif = require('gulp-if'),
    gulp_nano = require('gulp-cssnano'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    path = require('path');
gulpif = require('gulp-if');
autoprefixer = require('gulp-autoprefixer');

var env,
    jsSources,
    sassSources,
    outputDir,
    sassStyle;

proxy = "http://localhost:64909",

    url = 'http://rowland-clone.lndo.site', // Local Development URL for BrowserSync. Change as-needed.

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
        .pipe(autoprefixer('last 2 versions'))
        .pipe(
            sass({
                sourcemap: true,
                outputStyle: sassStyle
            }).on("error", sass.logError)
        )
        .pipe(sourcemaps.init())
        .pipe(gulpif(env !== 'development', gulp_nano()))
        .pipe(sourcemaps.write('.'))
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
        proxy: proxy,
        port: 64909,
        // Tunnel the Browsersync server through a random Public URL
        // tunnel: true,
        // Attempt to use the URL "http://my-private-site.localtunnel.me"
        // tunnel: "ppress",
        // Inject CSS changes
        injectChanges: true,
    });
    gulp.watch(source + "**/*.scss", styles).on("change", browserSync.reload);
    gulp.watch(dest + "js/**/*.js", js).on("change", browserSync.reload);
}
var build = gulp.series(js, styles, server, watch);
gulp.task("default", build);