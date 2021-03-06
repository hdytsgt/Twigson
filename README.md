# Twigson

A Craft CMS Twig Extension for reading local JSON file or directly through URL.



## Installation
1. Download ZIP and unzip file then place the `twigson` directory into your `craft/plugins` directory.

2. Install the plugin through Control Panel under `Settings > Plugins`


## Usage

1. Using local JSON file :

   ```twig
   {% set json = './countries.json' | twigson %}

   {% for key, item in json %}

      {{ key }} : {{ item }}
      
   {% endfor %}
   ```

   This will find `countries.json` under your Craft root folder. And of course you can pass absolute path too.  

   ​

2. Using URL :

   ```twig
   {% set json = 'http://yoursite.com/countries.json' | twigson %}

   {% for key, item in json %}

      {{ key }} : {{ item }}
      
   {% endfor %}
   ```

   ​


## Related Project

[TwigsonBundle for Symfony](https://github.com/hdytsgt/TwigsonBundle)



## License

[MIT](LICENSE)
