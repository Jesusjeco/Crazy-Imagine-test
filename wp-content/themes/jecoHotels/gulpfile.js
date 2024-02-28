const { series, src, dest, watch } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
// const imagemin = require("gulp-imagemin");
const babel = require("gulp-babel");
var uglify = require("gulp-uglify");

function compileDefaultSCSS(cb) {
	cb();
	return src("src/scss/default.scss")
		.pipe(sass().on("error", sass.logError))
		.pipe(autoprefixer())
		.pipe(cleanCSS())
		.pipe(dest("dist/css/"));
} //compileDefaultSCSS

function compileBlocksSCSS(cb) {
	cb();
	return src("blocks/**/*.scss")
		.pipe(sass())
		.pipe(autoprefixer())
		.pipe(cleanCSS())
		.pipe(dest("dist/css/blocks/"));
} //compileBlocksSCSS

// function runImage() {
//   return src(["src/images/*", "src/images/*/*"])
//     .pipe(imagemin())
//     .pipe(dest("dist/images/"));
// } //runImage

function runJS(cb) {
	// place code for your default task here
	cb();
} //runJS

/* Swiper slider */
// function runSwiperCss(cb) {
//   cb();
//   return src("node_modules/swiper/swiper.scss")
//     .pipe(sass().on("error", sass.logError))
//     .pipe(autoprefixer())
//     .pipe(cleanCSS())
//     .pipe(dest("dist/css/swiper/"));
// } //runSwiperCss
// function runSwiperJs(cb) {
//   cb();
//   return src("node_modules/swiper/swiper-bundle.js")
//     .pipe(babel())
//     .pipe(uglify())
//     .pipe(dest("dist/js/swiper/"));
// } //runSwiperJs

exports.default = series(
	compileDefaultSCSS,
	compileBlocksSCSS,
	runJS
	// runSwiperCss,
	// runSwiperJs,
	// runImage
);
exports.watcher = () => {
	watch(["src/scss/*.scss"], compileDefaultSCSS);
	watch("blocks/**/*.scss", compileBlocksSCSS);
};
