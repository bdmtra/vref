var gulp = require('gulp'),
    purgecss = require('gulp-purgecss');
const pkg = require('./package.json');
const $ = require('gulp-load-plugins')({
    pattern: ['*'],
    scope: ['devDependencies']
});

console.log(pkg.globs.critical);
gulp.task('default', (callback) => {
    doSynchronousLoop(pkg.globs.critical, processCriticalCSS, () => {
        // all done
        callback();
    });
});

function doSynchronousLoop(data, processData, done) {
    if (data.length > 0) {
        const loop = (data, i, processData, done) => {
            processData(data[i], i, () => {
                if (++i < data.length) {
                    loop(data, i, processData, done);
                } else {
                    done();
                }
            });
        };
        loop(data, 0, processData, done);
    } else {
        done();
    }
}

function processCriticalCSS(element, i, callback) {
    const criticalSrc = pkg.urls.critical + element.url;
    const criticalDist = pkg.paths.criticalDist;

    console.log("-> Generating critical CSS: " + criticalSrc );
    $.critical.generate({
        src: criticalSrc,
        inline: false,
        ignore: [],
        target: {
            css: criticalDist + element.template + '_critical.css',
            uncritical: criticalDist + element.template + '_uncritical.css',
        },
        width: 1200,
        height: 1200
    }, (err, output) => {
        if (err) {
            console.log(err);
        }
        callback();
    });
}