# Mibew Advanced Button plugin

It make the button represents actual operator's state and automatically hides it if the chat was started.

Additionaly the plugin sets the class `mibew_visible` or `mibew_hidden` for the button depending on its alleged visibility. It can be useful for implementing some custom effects with cloaking mode (see below) set to `none`.

The plugin needs the feature "Tracking and inviting" to be enabled. Otherwise it will just not work.

NB.: If one enabled the feature "Tracking and inviting" for the first time, the button should be regenerated.

## Installation

1. Get the archive with the plugin sources. You can download it from the [official site](https://mibew.org/plugins#mibew-advanced-button) or build the plugin from sources.

2. Untar/unzip the plugin's archive.

3. Put files of the plugins to the `<Mibew root>/plugins` folder.

4. (optional) Add plugins configs to "plugins" structure in
"`<Mibew root>`/configs/config.yml". If the "plugins" stucture looks like
`plugins: []` it will become:
    ```yaml
    plugins:
        "Mibew:AdvancedButton": # Plugin's configurations are described below
            mode: display
            submode: block
    ```

5. Navigate to "`<Mibew Base URL>`/operator/plugin" page and enable the plugin.

## Plugin's configurations

The plugin can be configured with values in "`<Mibew root>`/configs/config.yml" file.

### config.mode

Type: `String`

Default: `visibility`

Specify a mode to cloak the button after the start of the chat. Possible values: `visibility` (cloak using `visibility` CSS property), `display` (cloak using `display` CSS property), `none` (do nothing).

### config.submode

Type: `String`

Default: `inline-block`

Specify a value of the `display` CSS property for the visible button if mode was set to `display`.

## Build from sources

There are several actions one should do before use the latest version of the plugin from the repository:

1. Obtain a copy of the repository using `git clone`, download button, or another way.
2. Install [node.js](http://nodejs.org/) and [npm](https://www.npmjs.org/).
3. Install [Gulp](http://gulpjs.com/).
4. Install npm dependencies using `npm install`.
5. Run Gulp to build the sources using `gulp default`.

Finally `.tar.gz` and `.zip` archives of the ready-to-use Plugin will be available in `release` directory.


## License

[Apache License 2.0](http://www.apache.org/licenses/LICENSE-2.0.html)
