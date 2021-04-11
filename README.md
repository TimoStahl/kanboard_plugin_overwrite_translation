# Kanboard plugin to overwrite translations

How to overwrite Kanboard translations?
---------------------------------------

Translations are stored inside the directory Locale
There is sub-directory for each language, by example for the French we have fr_FR, Italian it_IT etc...
A translation is a PHP file that returns an Array with a key-value pairs
The key is the original text in english and the value is the translation for the corresponding language

Because this plugin is most likely the last one to get executed within kanboard, you can also overwrite the translations that come with other plugins

Author
------

- BlueTeck
- License MIT

Installation
------------

- Decompress the archive in the `plugins` folder

or

- Create a folder **plugins/zzzzOverwrite_translation**
- Copy all files under this directory
