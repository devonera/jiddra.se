var gulp = require('gulp');
var concat = require('gulp-concat');
var notify = require('gulp-notify');
var sass = require('gulp-sass');
var gutil = require('gulp-util');
var minifyJS = require('gulp-minify');
//var imagemin = require('gulp-imagemin');

// Core CSS
gulp.task('css', function() {
  return gulp.src([
    'custom/components/global/*.scss',
    'custom/components/**/*.scss'
    ])
    .pipe(concat('style.min.scss'))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('custom/cache/assets/css'))
    .pipe(notify("CSS generated!"));
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
    .pipe(notify("JS generated!"));
});

// Min
/*gulp.task('min', () =>
    gulp.src('media/**', { base: "./" })
        .pipe(imagemin())
        .pipe(gulp.dest('.'))
);*/

// Default
gulp.task('default', function() {
    gulp.watch('custom/components/**/*.scss', ['css']);
    gulp.watch('custom/components/**/*.js',   ['js' ]);
});