var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');

//それぞれの監視、コンパイル先のパスを定義
var paths = {
  'scss' : './scss/',
  'css' : './doc_root/webroot/css/'
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
