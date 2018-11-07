var gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var gutil = require('gulp-util');
var minifyJS = require('gulp-minify');

// Core CSS
gulp.task('css', function() {
  return gulp.src([
    '../../io-components/mixins/*.scss',
    'custom/components/global/*.scss',
    '../../io-components/**/*.scss',
    'custom/components/**/*.scss'
    ])
    .pipe(concat('style.min.scss'))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('custom/cache/assets/css'))
});

// JS
gulp.task('js', function() {
  gulp.src([
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
    gulp.watch('../../io-components/**/*.scss', ['css']);
    gulp.watch('custom/components/**/*.js',   ['js' ]);
});