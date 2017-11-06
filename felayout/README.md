# felayout

## Front-End layout for Subtheme t3kit template

### Required dependencies:

- [Git](https://git-scm.com/)
- [NodeJs](http://nodejs.org/) >=6.9.1
- [NPM](https://github.com/npm/npm) >=3.10.8
- [Grunt-cli](http://gruntjs.com/) >=1.2.0 `npm install -g grunt-cli`

***

### Install NPM dependencies:

```bash
cd felayout
npm install
```

***

## `felayout` includes CSS and JS source files Subtheme project.

1. `felayout` works closely with t3kit docker, so to start developing using felayout we need to [install and run t3kit using docker configuration](https://github.com/t3kit/t3kit#development)


2. Next step we need disable default styling (CSS) and JS scripts in t3kit to be able to insert it (CSS/JS) dynamically from felayout. For this, we need to change `FElayout mode` constant from `less` to `development`.
   * TYPO3 BE -> tab `Themes` -> `Expert` -> `FElayout mode`

3. Next step is to run local server (_proxied from t3kit TYPO3 installation_) `localhost:9001` wich includes all CSS/LESS/JS files (`subtheme_t3kit_template/felayout/dev`) with livereloading. For this, we need to use command `grunt`.

4. Last step. After all changes (CSS/LESS/JS) which you did in `felayout` you will need to compile FE files into `subtheme_t3kit_template/Resources/Public/css` or `subtheme_t3kit_template/Resources/Public/less` folder using comands: `grunt compileCss` or `grunt compileLess`. Also, keep in mind that these compilated files should be committed by separate commit with a message `update css/less` without any prefixes. [Commit messages without prefixes shouldn't go to changelog files](https://github.com/t3kit/t3kit/blob/master/CONTRIBUTING.md#labels). **Do not commit compilated files together with source files from `subtheme_t3kit_template/felayout/dev`**



### Grunt commands:

- Run `grunt` to start local server (_proxied from t3kit TYPO3 installation_) with livereload `localhost:9001`
- Run `grunt check` to check CSS (.stylelintrc) and JS (JS standard) files according code conventions.
- Run `grunt compileCss` or `grunt cc` to compile all Front-End service files plus **CSS** styling for **t3kit** needs and copy it to `subtheme_t3kit_template/Resources/Public/css` folder.
- Run `grunt compileLess` or `grunt cl` to compile all Front-End service files plus **LESS** styling for **t3kit** needs, copy it to it to `subtheme_t3kit_template/Resources/Public/less` folder.
- Run `grunt production` or `grunt prod` to compile all Front-End service files for production. `compileCss` + `compileLess` + `uglifyJs`
