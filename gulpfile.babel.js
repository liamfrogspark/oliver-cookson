var gulp = require('gulp');
var sass = require('gulp-sass');
var contact = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');
var cleanCss = require('gulp-clean-css');
var gulpif = require('gulp-if');
var autoprefix = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var plumber = require('gulp-plumber');

browserSync.create();

const autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR'],
};

const ENVIRONMENT = process.env.NODE_ENV || 'production';
const projectURL = 'http://ocookson.test';
const themeURL = 'web/app/themes/frogspark/';

gulp.task('js', () => {
  return gulp.src(`${themeURL}js/src/*.js`)
    .pipe(concat('bundle.min.js'))
    .pipe(rename('bundle.min.js'))
    .pipe(gulp.dest(`${themeURL}js/dist`));
});

gulp.task('sass', () => {
  const onError = (err) => {
    notify({
      title: 'Gulp Task Error',
      message: 'Gulp Task errored, check console',
    }).write(err);
    console.log(err.toString());
  };

  return gulp.src(`${themeURL}scss/src/styles.scss`)
    .pipe(concat('bundle.min.scss'))
    .pipe(gulpif(ENVIRONMENT, sourcemaps.init()))
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sass())
    .pipe(gulpif(ENVIRONMENT, sourcemaps.write()))
    .pipe(autoprefix(autoprefixerOptions))
    .pipe(cleanCSS())
    .pipe(rename('bundle.min.css'))
    .pipe(gulp.dest(`${themeURL}scss/dist`))
    .pipe(browserSync.stream());
});

gulp.task('font', () => {
  return gulp.src('node_modules/@fortawesome/fontawesome-pro/webfonts/*')
    .pipe(gulp.dest(`${themeURL}scss/webfonts`));
});

gulp.task('browserSync', () => {
  browserSync.init({
    proxy: projectURL,
  });
});

gulp.task('sass:watch', () => {
  gulp.watch(`${themeURL}scss/src/**/*.scss`, ['sass']);
  gulp.watch(`${themeURL}**/*.php`).on('change', browserSync.reload);
});

gulp.task('js:watch', () => {
  gulp.watch(`${themeURL}js/src/*.js`, ['js']);
  gulp.watch(`${themeURL}**/*.php`).on('change', browserSync.reload);
  gulp.watch(`${themeURL}**/*.js`).on('change', browserSync.reload);
});

gulp.task('development', ['font', 'browserSync', 'sass:watch', 'js:watch']);

gulp.task('production', ['font', 'sass', 'js']);

gulp.task('default', ['development']);