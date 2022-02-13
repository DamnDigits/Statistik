const gulp = require('gulp')
// SASS -> CSS
const sass = require('gulp-sass')(require('sass'));

// Define important variables
const src = './src';
const dest = './dist';
const useTypeScript = false;


// Compile SASS to CSS with gulp
const css = () => {
    // Find SASS
    return gulp.src(`${src}/sass/**/*.{sass,scss}`)
        // Init Plumber
        .pipe(plumber())
        // Start sourcemap
        .pipe(gulpif(!isProduction(), sourcemaps.init()))
        // Compile SASS to CSS
        .pipe(sass({
            includePaths: ['./node_modules'],
            fiber: Fiber
        }).on('error', sass.logError))
        // Add suffix
        .pipe(rename({ basename: 'main', suffix: '.min' }))
        // Add Autoprefixer & cssNano
        .pipe(postcss([autoprefixer(), cssnano()]))
        // Write sourcemap
        .pipe(gulpif(!isProduction(), sourcemaps.write('')))
        // Write everything to destination folder
        .pipe(gulp.dest(`${dest}/css`));
};

// Default function (used when type "gulp")
exports.default = dev;
exports.dev = dev;
exports.build = build;
