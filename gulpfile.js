var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');
var babel = require('gulp-babel');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minifycss = require('gulp-minify-css');
var stylus = require('gulp-stylus');


gulp.task('styles', function(){
    gulp.src(['assets/stylus/main.styl'])
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }}))
        .pipe(stylus())
        .pipe(minifycss())
        .pipe(gulp.dest('public/css/'));

    gulp.src(['assets/stylus/editor.styl'])
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }}))
        .pipe(stylus())
        .pipe(minifycss())
        .pipe(gulp.dest('public/css/'));
});

gulp.task('scripts', function(){
    return gulp.src(['assets/js/**/*.js', '!assets/js/modernizr.js'])
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }}))
        .pipe(babel())
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('public/js/'))
});

gulp.task('default', function(){
    gulp.watch("assets/stylus/**/*.styl", ['styles']);
    gulp.watch("assets/js/**/*.js", ['scripts']);
});
