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
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    '../js/vendors/*.js',
    '../js/modules/*.js'
    ])
    //.pipe(jshint())
    //.pipe(jshint.reporter('fail'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('../js/'));
});

gulp.task('watch', function() {
  gulp.watch('../sass/**/*.scss', gulp.parallel('sass'));
  gulp.watch('../js/**/*.js', gulp.parallel('js'));
});

gulp.task('default', gulp.parallel('sass', 'js', 'watch'));
