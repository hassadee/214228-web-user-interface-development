const { src, dest, watch, parallel } = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');

function css() {
  return src('assets/scss/*.scss')
    .pipe(sass())
    .pipe(minifyCSS())
    .pipe(dest('public/css'))
}

function watchFiles() {
  watch("./assets/scss/**/*", css);
}

exports.css = css;
exports.watch = watch;
exports.default = parallel(css, watchFiles);