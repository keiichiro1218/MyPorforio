// gulpプラグインの読み込み
const gulp = require("gulp");
// // Sassをコンパイルするプラグインの読み込み
const gulpDartSass = require('gulp-dart-sass')
const sassGlob = require("gulp-sass-glob-use-forward");

function sass() {
    return gulp.src("sass/style.scss")
        .pipe(sassGlob())
        .pipe(gulpDartSass())
        .pipe(gulp.dest("css"));
};

exports.sass = function () {
    gulp.watch('sass/*/*.scss', sass);
    gulp.watch('sass/*/*/*.scss', sass);
}