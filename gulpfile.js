var gulp = require('gulp');
var sass = require("gulp-sass")(require("sass"));
//var jshint = require('gulp-jshint');
var concat = require('gulp-concat');

function sassTask() {
  return gulp.src('sass/**/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(gulp.dest('.')
  );
}

function jsTask() {
  return gulp.src([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'js/vendors/*.js',
    'js/modules/*.js'
    ])
    .pipe(concat('main.js'))
    .pipe(gulp.dest('js/'));
}

function watchTask() {
  gulp.watch('sass/**/*.scss', sassTask);
  gulp.watch('js/**/*.js', jsTask);
}

exports.default = gulp.series(
  gulp.parallel(sassTask, jsTask),
  watchTask);
