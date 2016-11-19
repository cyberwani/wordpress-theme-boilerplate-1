# WordPress Theme Boilerplate
This repository contains another simple but powerful boilerplate for creating WordPress themes. 
It is based on this [frontend-boilerplate](https://gitlab.com/jdoubleu/frontend-boilerplate). 

## Introduction
This boilerplate will be updated and extended by time. If you have suggestions or any need of change, you're welcome to open an issue.
It aims to be a modular, easily extendable, easy to setup and system independent boilerplate which you can setup within seconds.

As it is based on the [frontend-boilerplate](https://gitlab.com/jdoubleu/frontend-boilerplate) it includes many functionalities provided by it.
Checkout this documentation as well.

## Requirements
You need to have:
* [`Composer`](https://getcomposer.org/) installed. You can use it system-wide or locally in your project. Checkout the documentation for more information.
* [`Node.js`](https://nodejs.org/) (and `npm`) installed to your system (I tested it with `v6.2.1`)
* [`Bower`](https://bower.io/) installed for vendor package management

Also recommended is:
* [`gulp-cli`](https://www.npmjs.com/package/gulp-cli) (`npm install -g gulp-cli`)
  
All scripts and tasks are fitted to OSX/Linux so you may experience weird behaviour on Windows or others.

## Getting started
The bootstrap task for your next theme is very easy:
* Pull the latest `master` from this repository and copy all files into your new project's folder **or**
* Fork this repository

Next step is to install all (development) dependencies: `composer install`.

You may also follow this short todo list to change the package meta information:
1. Update `composer.json`, `package.js` and `bower.json` with your details
2. Update theme details in `style.css`
3. Updated PHPDoc comments of `functions.php`, `includes/theme.php`
4. Update global constants in `functions.php`
5. Maybe change the license
6. Extend or remove the `humans.txt`
7. Update the coding standard in `.editorconfig`, `.eslintrc` and `.sass-lint.yml` to your needs
8. Remove the `CHANGELOG`
9. Remove/Clear this readme file

### Development
When you are coding just run
```
npm start
```
or use the `gulp-cli` to run custom or separated tasks
```
gulp lint
```

The `default` and `watch` gulp task will watch the files and compile them if a change was detected. 
`npm start` will just run the gulp default's task.

#### Linting
You can lookup all SCSS linting rules here: [https://github.com/sasstools/sass-lint/tree/develop/docs/rules](https://github.com/sasstools/sass-lint/tree/develop/docs/rules).
There are more detailed information about what is wrong.

### Workflow
There's already a configuration for the GitLab CI. On every push it triggers a linting.
On pushes to master it will build an artifact. The general workflow would be developing in a `develop` branch, 
while merging into a `master` branch means a release.

If you want to use another CI or compile it locally you can use the gulp `build` tasks defined in `gulpfile.js`.

## Special Thanks
This boilerplate was made possible by all these cool and powerful tools that are running in 
the background and help us every day.
 
**Open Source ist awesome!**

Tools used:
* [Composer](https://getcomposer.org/)
* [Node.js](https://nodejs.org/)
* [Bower](https://bower.io/)
* [Gulp](http://gulpjs.com/)
* [Babel](https://babeljs.io/)
* [ESLint](http://eslint.org/)
* [SASS](http://sass-lang.com/)
* [sass-lint](https://github.com/sasstools/sass-lint)
* [UglifyJs2](https://github.com/mishoo/UglifyJS2)
* [UglifyCSS](https://github.com/fmarcia/UglifyCSS)
* ... and many more!
* ... and all their subpackages

**Thank you!**

## License
This software is under [MIT License](LICENSE). You are free to copy, modify, distribute this boilerplate.
You can build your own boilerplate upon it or bootstrap a theme out of it.

However this software uses several tools and programs which have different licenses. 