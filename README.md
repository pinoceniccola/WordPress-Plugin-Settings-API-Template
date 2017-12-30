# WordPress-Plugin-Settings-API-Template
Handy Template Class for creating tabbed navigation option pages with the WordPress Settings API.

## About
WordPress Settings API is a... little dark hole, you can easly spend hours to setup a bunch of fields. This PHP Class let you easly create an option page by mostly tweaking a simple Array. It does support tabbed navigation.

## Screenshot
![Option Panel 1](https://github.com/pinoceniccola/WordPress-Plugin-Settings-API-Template/blob/master/screenshot-wordpress-settings-api-1.png?raw=true "The options panel build with the template class")

![Option Panel 2](https://github.com/pinoceniccola/WordPress-Plugin-Settings-API-Template/blob/master/screenshot-wordpress-settings-api-2.png?raw=true "The options panel build with the template class")

## Credits
This is heavly based on this [gist](https://gist.github.com/mrqaidi/c0efc1c6f60689d5f3e1114a314386c2) by [@mrqaidi](https://github.com/mrqaidi/). There are a few differences:
- All options are saved in a single array
- There's a getter method for the options
- Accepts Plugin Name and Plugin Slug as parameters
- No external assets required as there are no Image Upload and Color Picker fields (Sorry, but I don't need them most of the time)