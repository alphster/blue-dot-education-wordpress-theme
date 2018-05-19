require('es6-promise').polyfill();
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var c = require('ansi-colors');
var beep = require('beeper');

var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

var onError = function (err) {
    console.log('An error occurred:', c.magenta(err.message));
    beep();
    this.emit('end');
};

gulp.task('sass', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(plumber({ errorHandler: onError }))
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'))
});

gulp.task('watch', function () {
    browserSync.init({
        files: ['./**/*.php'],
        proxy: 'http://localhost/bde/',
    });
    gulp.watch('./sass/**/*.*', ['sass', reload]);
    gulp.watch('./**/*.php', reload);
});

gulp.task('default', ['sass', 'watch']);