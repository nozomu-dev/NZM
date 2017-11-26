var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');

//それぞれの監視、コンパイル先のパスを定義
var paths = {
    'scss' : './scss/',
    'css' : './doc_root/webroot/css/',
    'js' : './doc_root/webroot/js/'
}

//scssのコンパイル
gulp.task('scss',function(){
    var processors = [
        cssnext()
    ];
    gulp.src(paths.scss + '**/*.scss')
        .pipe(sass())
        .pipe(postcss(processors))
        .pipe(gulp.dest(paths.css));
});

//自動監視
gulp.task('watch',['scss'],function(){
    var scssWatcher = gulp.watch(paths.scss + '**/*.scss',['scss']);
        scssWatcher.on('change',function(event){
    });
});

//ライブラリファイルの吐き出し
gulp.task('quill', function(){
    gulp.src([
        'node_modules/quill/dist/quill.min.js',
        'node_modules/quill/dist/quill.core.js',
    ]).pipe(gulp.dest(paths.js + 'libs/'));

    gulp.src([
        'node_modules/quill/dist/quill.snow.css',
        'node_modules/quill/dist/quill.core.css',
    ]).pipe(gulp.dest(paths.css + 'libs/'));
});
