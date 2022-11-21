const mix = require('laravel-mix');


const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

mix.webpackConfig({
    plugins: [
        new SVGSpritemapPlugin(['resources/svg/*.svg'], {
            output:
            {
                filename:'svg/mizuxe-svg.svg',
                svgo:
                {
                    plugins: [
                        {
                            removeTitle: true
                        }
                    ]
                },
                svg4everybody: false

            },
        }),
    ]
});

/*
 |----------------------------------------------------------------------
 | Mix Asset Management
 |----------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sass('resources/sass/pattern.scss', 'public/css/pattern.css')
//     .copy('resources/images/misimage/*','public/images/misimages')


//     // -----------------candy----------------

//     .sass('resources/sass/candy/candy.scss', 'public/css')
//     .copy('resources/images/candyimages','public/images')

//      // -------------------miszuse---------------

//      .sass('resources/sass/miszuse/mis.scss', 'public/css')
//      .copy('resources/images/misimage/*','public/images/misimages')

//      //-------------------glozzam-------------------
     
//      .sass('resources/sass/glozzam/glo.scss', 'public/css')
//      .copy('resources/images/glo/*','public/images/misimages')


//      //----------------------webert-----------------------

//      .sass('resources/sass/webert/webert.scss', 'public/css')
//      .copy('resources/images/glo/*','public/images/webert')

//     //----------------------wood-----------------------

//     .sass('resources/sass/wood/wood.scss', 'public/css')
//     .copy('resources/images/wood/*','public/images/wood')
// //    .js('resources/js/gallery/Gallery.js', 'public/js')

//     //----------------------medilab-----------------------

//     .sass('resources/sass/medilab/medilab.scss', 'public/css')
//     .copy('resources/images/medilab/*','public/images/medilab')
//     // .browserSync('sabeekahamed_aprdes.test/glo');


//     // .sass('resources/sass/basicStructure/6pages/homepage.scss', 'public/css/basic/')

//     .sass("resources/sass/basicStructure/6pages/homepage.scss", "public/css/basic/")

//     // ---------------------------day--------------------------------------

//     .sass("resources/sass/day/6pages/homepage.scss", "public/css/day/")
//     .copy('resources/images/scssimg/*','public/images/scssimg')
//     .copy('resources/fonts/*', 'public/fonts')
//     .js('resources/js/back.js', 'public/js')
    


//       // ---------------------------natours-----------------------------------

//       .sass("resources/sass/natours/6pages/homepage.scss", "public/css/natours/")
//       .copy('resources/images/natours/*','public/images/natours')

//       // ---------------------------trillo-----------------------------------

//       .sass("resources/sass/trillo/6pages/homepage.scss", "public/css/trillo/")
//       .copy('resources/images/trillo/*','public/images/trillo')


//        // ---------------------------nexter-----------------------------------

//        .sass("resources/sass/nexter/6pages/homepage.scss", "public/css/nexter/")
//        .copy('resources/fonts/*', 'public/fonts')
//        .copy('resources/images/nexter/*','public/images/nexter')

              // ---------------------------jasper-----------------------------------

       .sass("resources/sass/jasper/6pages/homepage.scss", "public/css/jasper/")
       .copy('resources/fonts/*', 'public/fonts')
       .copy('resources/images/jasper/*','public/images/jasper');
      
