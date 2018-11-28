var gulp = require('gulp');
var sass = require('gulp-sass');
//var jshint = require('gulp-jshint');
var concat = require('gulp-concat');

gulp.task('sass', function() {
  gulp.src('../sass/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(gulp.dest('../'));
});

gulp.task('js', function() {
  gulp.src([
    '../js/vendors/*.js',
    '../js/modules/*.js'
    ])
    //.pipe(jshint())
    //.pipe(jshint.reporter('fail'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('../js/'));
});

gulp.task('watch', function() {
  gulp.watch('../sass/**/*.scss', ['sass']);
  gulp.watch('../js/**/*.js', ['js']);
});

gulp.task('default', ['sass', 'js', 'watch']);
