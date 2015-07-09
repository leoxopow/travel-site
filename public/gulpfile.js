"use strict";

var gulp =require('gulp'),
	less = require('gulp-less'),
	autoprefixer = require('gulp-autoprefixer'),
	minifyCSS = require('gulp-minify-css'),
	rename = require('gulp-rename'),
	livereload = require('gulp-livereload'),
	connect = require('gulp-connect');

gulp.task('connect', function() {
  connect.server({
    livereload: true,
    root: 'app',
    port: 8081
  });
});

gulp.task('less', function(){
	gulp.src('./app/less/*.less')
		.pipe(less())
		.pipe(autoprefixer('last 2 versions', '> 1%', 'ie9'))
		.pipe(minifyCSS())
		.pipe(gulp.dest('./app/css'))
		.pipe(rename('style.min.css'))
		.pipe(connect.reload());
});

gulp.task('html', function () {
	gulp.src('./app/*.html')
		.pipe(connect.reload());
});

gulp.task('watch', function () {
  	gulp.watch('./app/less/*.less', function(){
  		gulp.run('less');
  	});
});

gulp.task('default', ['less', 'html', 'watch']);
