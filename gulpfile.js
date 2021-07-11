const gulp = require('gulp');
const sass = require('gulp-sass');
const concat= require('gulp-concat');
const terser= require('gulp-terser');
const browserSync = require('browser-sync').create();
var rename = require('gulp-rename');
const {src, dest, parallel, series}   = require('gulp');
var localhost_link= "http://localhost/madefinition/madefinition/";

//.....................................   == compile scss into css style and style.min == ..........................
function style() { 
    var config= {};
    config.outputStyle= 'compressed';
	return gulp.src(['./assets/scss/contact.scss', './assets/scss/style.scss']) 
    .pipe(sass()) 
    .pipe(gulp.dest('./assets/css/'))  
    .pipe(sass(config))
    .pipe(rename("style.min.css"))
    .pipe(gulp.dest('./assets/css/'));   
} 

//.....................................   == js file  == ..........................
function script() {
    return gulp.src([
        './assets/js/plugins-js/jquery.min.js',
        './assets/js/plugins-js/popper.min.js',
        './assets/js/plugins-js/bootstrap.min.js',
        './assets/js/plugins-js/swiper.js',
        './assets/js/plugins-js/aos.js',
        // './assets/js/plugins-js/fontawesome-markers.min.js',
        './assets/js/local-js/*.js'
    ])
    .pipe(concat('all.js'))
    .pipe(gulp.dest('./assets/js'))
    .pipe(terser())
    .pipe(rename("all.min.js"))
    .pipe(gulp.dest('./assets/js'))
    .pipe(browserSync.stream());   
}

// .....................................   == Live Server == ..........................
function watch() {
    browserSync.init({ 
        sever: {
            baseDir: './'
        }
    },{
        proxy: localhost_link
    });
    gulp.watch('./assets/scss/**/*.scss', style);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
    // gulp.watch('./assets/js/**/*.js').on('change', browserSync.reload);
    gulp.watch(['./assets/js/plugins-js/**/*.js','./assets/js/local-js/**/*.js'], script); 
}

exports.style = style; 
exports.script = script;
exports.watch = watch;   
exports.default = watch;   



/*

-> SETUP GULP:
    npm install --global gulp-cli		
    npm init -y
    npm i --save-dev gulp gulp-sass gulp-rename gulp-concat gulp-terser browser-sync

-> Install bootstrap: 
    npm i --save bootstrap

-> Run using: gulp watch 

*/