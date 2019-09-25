//////////////////////////////////////////////////////////////////////////////////////
// GULP WATCH FILE
// GitHub: https://github.com/ericut/gulp-sass-compiler
// Digite 'gulp' no terminal
// Instalar: NodeJS, NPM e o GULP
// Dependências:
// npm install gulp gulp-sass gulp-watch gulp-autoprefixer -D
// npm install --save-dev gulp gulp-sass gulp-watch gulp-autoprefixer
//
// Rodar: GULP
//////////////////////////////////////////////////////////////////////////////////////

// Dependências
var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var autoprefixer =  require('gulp-autoprefixer');

// SASS
// src : pasta onde fica toda a estrutura *.scss
// outputStyle : tipo de saída - pode ser nested, compressed, compact, expanded etc [necessário reiniciar o gulp]
// autoprefixer : adicionar prefixo de navegadores no código compilado, 4 versões de navegadores (-webkit- -o- -moz- etc...)
// dest : pasta destino para .css
gulp.task('sass', function() {
    return gulp.src('scss/*.scss')
    .pipe(sass({outputStyle: 'nested'}).on('error', sass.logError))
    .pipe(autoprefixer('last 4 versions'))
    .pipe(gulp.dest('css'));
});

// Watch
// watch : pasta onde será observado a locação do *.scss
gulp.task('watch', function() {
    gulp.watch('scss/*.scss', gulp.series('sass'));
});

// Gulp
// gulp.series : array para manter o watch no comando 'gulp'
gulp.task('default', gulp.series('sass', 'watch'));