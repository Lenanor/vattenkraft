var gulp = require('gulp');

//Test
gulp.task('hello', function() {
  console.log('Hello Lena');
});

// Plugins
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var bs = require('browser-sync').create(); // create a browser sync instance.



// Tasks
gulp.task('sass', function() {
	return gulp.src('src/scss/**/*.scss') 
		.pipe(sass()) // Converts Sass to CSS with gulp-sass
		.pipe(autoprefixer())
      	.pipe(gulp.dest('./'))
		//.pipe(bs.reload({ stream: true }))
		bs.reload();
});

gulp.task('browser-sync', ['sass'], function() { 

	bs.init({
		proxy: "http://localhost:8888/Wordpress/vattenfall/" // use proxy instead of server with MAMP
    })
   

    /*bs.init({
        server: {
            baseDir: "./"
        }
    });
    */

});


// Watch
gulp.task('watch', ['browser-sync', 'sass'], function() {
		gulp.watch("src/scss/**/*.scss", ['sass']);
		gulp.watch("./*.php").on("change", bs.reload);
})