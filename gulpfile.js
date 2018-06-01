var gulp = require('gulp');

var sass = require('gulp-sass');
var minifyCSS = require('gulp-csso');
gulp.task('style', function() {
	return gulp.src('resources/styles/**/*.scss')  // Gets all files ending with .scss in app/scss
		.pipe(sass()) // Process the sass/scss files
		.pipe(minifyCSS()) // Minify output
		.pipe(gulp.dest('build/styles')) // Output Directory
});

gulp.task('font', function() {
	return gulp.src([
		'resources/fonts/**/*',
		'bower_components/font-awesome/fonts/**/*'
		])
		.pipe(gulp.dest('build/fonts'))
})

var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
gulp.task('master-script', function() {
	gulp.src([
		'bower_components/jquery/dist/jquery.js',
		// 'vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js',
		'bower_components/jquery-ui/jquery-ui.js',
		'vendor/twbs/bootstrap/assets/js/vendor/popper.min.js',
		'vendor/twbs/bootstrap/dist/js/bootstrap.js',
		'bower_components/parallax.js/parallax.js'
		])
	    .pipe(concat('master-scripts.js'))
	    .pipe(uglify())
	    .pipe(gulp.dest('build/scripts'))
});

gulp.task('custom-script', function() {
	gulp.src('resources/scripts/**/*.js')
	    // .pipe(concat('custom-scripts.js'))
	    .pipe(uglify())
	    .pipe(gulp.dest('build/scripts'))
});

var imagemin = require('gulp-imagemin');
gulp.task('images', function() {
	return gulp.src('resources/images/**/*.+(png|jpg|jpeg|gif|svg)')
	.pipe(imagemin({
		interlaced: true // Setting interlaced to true
	}))
	.pipe(gulp.dest('build/images'))
});


gulp.task('watch', ['style', 'custom-script', 'images', 'font'], function() {
	gulp.watch('resources/styles/**/*.scss', ['style']);
	gulp.watch('resources/scripts/**/*.js', ['custom-script']);
	gulp.watch('resources/images/**/*.+(png|jpg|jpeg|gif|svg)', ['images']);
	gulp.watch('resources/fonts/**/*', ['font']);
});

gulp.task('default', ['style', 'font', 'master-script', 'custom-script', 'images', 'watch']);