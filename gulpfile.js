/**
 * Ord&Bild Gulpfile
 * Version 1.2
 */
var gulp = require('gulp'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    imagemin = require('gulp-imagemin');

gulp.task('styles', function() {
	return gulp.src([
			'css/normalize.css',
			'css/boilerplate.css',
			'css/bootstrap.css',
			'css/genericons.css',
			'css/responsive-tables.css',
			'css/style.css',
		])
		.pipe(concat('style-min.css'))
		.pipe(gulp.dest('css/'))
	    .pipe(minifycss())
	    .pipe(gulp.dest('css/'));
});

gulp.task('scripts', function() {
	return gulp.src([
		'js/plugins.js',
		'js/main.js'
		])
	    .pipe(concat('script-min.js'))
	    .pipe(gulp.dest('js/'))
	    .pipe(uglify())
	    .pipe(gulp.dest('js/'));
});

gulp.task('images', function() {
	return gulp.src('img/**/*')
	    .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
	    .pipe(gulp.dest('img/'))
});

