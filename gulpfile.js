'use strict';

var
gulp = require('gulp'),
minifyCss = require('gulp-minify-css'),
concat = require('gulp-concat'),
sass = require('gulp-sass'),
replace = require('gulp-replace');

gulp.task('sass', function () {
  gulp.src('./sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(replace('/*!', '/*'))
    .pipe(gulp.dest('./'));
});

gulp.task('default', ['sass', 'watch']);

gulp.task('watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});
