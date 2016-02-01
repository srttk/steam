var gulp = require('gulp');

var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');


// Sass Task
 gulp.task('sass', function() {
   gulp.src('./resources/assets/scss/**/*.scss')
    .pipe(sass())
     .pipe(autoprefixer())
      .pipe(gulp.dest('public/css'));

 });

// Script Task
 gulp.task('script',function(){

    gulp.src('./resources/assets/js/**/*.js')
      .pipe(concat('app.js'))
      .pipe(gulp.dest('./public/js/'));

  });

 gulp.task('watch', function() {

   gulp.watch(['./resources/assets/js/**/*.js'],['script']);
   gulp.watch(['./resources/assets/scss/**/*.scss'],['sass']);

 });

  

  gulp.task('default', ['watch']);
