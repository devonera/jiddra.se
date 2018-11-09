var gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var gutil = require('gulp-util');
var minifyJS = require('gulp-minify');

// Core CSS
gulp.task('css', function() {
  var io_components = '../../io-shared/components/';
  var components = 'custom/components/';
  return gulp.src([
    io_components + 'mixins/*.scss',
    io_components + 'variables/*.scss',
    io_components + 'global/*.scss',
    components + 'global/*.scss',
    io_components + '**/*.scss',
    components + '**/*.scss'
    ])
    .pipe(concat('style.min.scss'))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('custom/cache/assets/css'))
});

// JS
gulp.task('js', function() {
  gulp.src([
    '../../io-shared/components/**/*.js',
    'custom/components/**/*.js'
    ])
    .pipe(concat('script.min.js'))
    .pipe(minifyJS())
    .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
    .pipe(gulp.dest('custom/cache/assets/js'))
});

// Default
gulp.task('default', function() {
    gulp.watch('custom/components/**/*.scss', ['css']);
    gulp.watch('../../io-shared/components/**/*.scss', ['css']);
    gulp.watch('custom/components/**/*.js',   ['js' ]);
    gulp.watch('../../io-shared/components/**/*.js', ['js']);
});