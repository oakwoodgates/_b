/**
 * WPGulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 *
 * @package WPGulp
 */

// Project options.

// Local project URL of your already running WordPress site.
// > Could be something like "wpgulp.local" or "localhost"
// > depending upon your local WordPress setup.
const projectURL = 'oakwood.local';

// Theme/Plugin URL. Leave it like it is; since our gulpfile.js lives in the root folder.
const productURL = './';
const browserAutoOpen = false;
const injectChanges = true;

// >>>>> Style options.
// Path to main .scss file.
const styleSRC = './src/scss/styles.scss';

// Path to place the compiled CSS file. Default set to root folder.
const styleDestination = './assets/css/';

// Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
const outputStyle = 'compact';
const errLogToConsole = true;
const precision = 10;

// JS Vendor options.
const jsVendorSRC = './src/js/vendor/*.js'; // Path to JS vendor folder.
const jsVendorDestination = './assets/js/'; // Path to place the compiled JS vendors file.
const jsVendorFile = 'vendor'; // Compiled JS vendors file name. Default set to vendors i.e. vendors.js.

// JS Custom options.
const jsCustomSRC = './src/js/custom/*.js'; // Path to JS custom scripts folder.
const jsCustomDestination = './assets/js/'; // Path to place the compiled JS custom scripts file.
const jsCustomFile = 'bundle'; // Compiled JS custom file name. Default set to custom i.e. custom.js.

// Images options.

// Source folder of images which should be optimized and watched.
// > You can also specify types e.g. raw/**.{png,jpg,gif} in the glob.
const imgSRC = './src/img/raw/**/*';

// Destination folder of optimized images.
// > Must be different from the imagesSRC folder.
const imgDST = './assets/img/';

// >>>>> Watch files paths.
const watchStyles = './src/scss/**/*.scss'; // Path to all *.scss files inside css folder and inside them.
const watchJsVendor = './src/js/vendor/*.js'; // Path to all vendor JS files.
const watchJsCustom = './src/js/custom/*.js'; // Path to all custom JS files.
const watchPhp = './**/*.php'; // Path to all PHP files.


// >>>>> Zip file config.
// Must have.zip at the end.
const zipName = 'file.zip';

// Must be a folder outside of the zip folder.
const zipDestination = './../'; // Default: Parent folder.
const zipIncludeGlob = [ './**/*' ]; // Default: Include all files/folders in current directory.

// Default ignored files and folders for the zip file.
const zipIgnoreGlob = [
	'!./{node_modules,node_modules/**/*}',
	'!./.git',
	'!./.svn',
	'!./gulpfile.babel.js',
	'!./wpgulp.config.js',
	'!./.eslintrc.js',
	'!./.eslintignore',
	'!./.editorconfig',
	'!./phpcs.xml.dist',
	'!./vscode',
	'!./package.json',
	'!./package-lock.json',
	'!./assets/css/**/*',
	'!./assets/css',
	'!./assets/img/raw/**/*',
	'!./assets/img/raw',
	`!${imgSRC}`,
	`!${styleSRC}`,
	`!${jsCustomSRC}`,
	`!${jsVendorSRC}`
];

// >>>>> Translation options.
const textDomain = 'oakwood'; // Your text domain here.
const translationFile = 'oakwood.pot'; // Name of the translation file.
const translationDestination = './languages'; // Where to save the translation files.
const packageName = 'OAKWOOD'; // Package name.
const bugReport = 'https://github.com/oakwoodgates/oakwood/'; // Where can users report bugs.
const lastTranslator = 'Oakwood Gates <wpguru4u@gmail.com>'; // Last translator Email ID.
const team = 'WPGuru4u <wpguru4u@gmail.com>'; // Team's Email ID.

// Browsers you care about for auto-prefixing. Browserlist https://github.com/ai/browserslist
// The following list is set as per WordPress requirements. Though; Feel free to change.
const BROWSERS_LIST = [ 'last 2 version', '> 1%' ];

// Export.
module.exports = {
	projectURL,
	productURL,
	browserAutoOpen,
	injectChanges,
	styleSRC,
	styleDestination,
	outputStyle,
	errLogToConsole,
	precision,
	jsVendorSRC,
	jsVendorDestination,
	jsVendorFile,
	jsCustomSRC,
	jsCustomDestination,
	jsCustomFile,
	imgSRC,
	imgDST,
	watchStyles,
	watchJsVendor,
	watchJsCustom,
	watchPhp,
	zipName,
	zipDestination,
	zipIncludeGlob,
	zipIgnoreGlob,
	textDomain,
	translationFile,
	translationDestination,
	packageName,
	bugReport,
	lastTranslator,
	team,
	BROWSERS_LIST
};
