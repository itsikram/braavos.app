// import dartSass from 'sass';
// import gulpSass from 'gulp-sass';

const gulp = require('gulp');
const dartSass = require('sass');
const gulpSass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const scss = gulpSass(dartSass);

gulp.task('scss', function() {
    return gulp.src('src/scss/main.scss')
        .pipe(sourcemaps.init())
        .pipe(scss())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('src/css'))
});

gulp.task('watch', function() {
    gulp.watch('src/scss/**/*.scss', gulp.parallel('scss'));
});

gulp.task('default', gulp.parallel('scss', 'watch'));