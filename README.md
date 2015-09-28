# moodle-editor_atto-matrix
Moodle Atto Editor plugin for Matrices and Arrays using TeX/MathJax

Installation

Either

Download the zip file, unzip to give the moodle-atto_editor-matrix folder. Rename this to matrix and copy to the lib/editor/atto/plugins folder of your Moodle installation to give lib/editor/atto/plugins/matrix

Or Navigate to the lib/editor/atto/plugins directory of your Moodle installation. Then isue the command

git clone https://github.com/geoffrowland/moodle-editor_atto-matrix.git matrix.

Then visit the Admin notifications page of your Moodle to complete the installation.

After installation you need to complete the following steps:

Add matrix to Administration > Site administration > Plugins > Text editors > Atto HTML editor > Atto toolbar settings > Toolbar config, to give, for example:

insert = equation, matrix, charmap, table, clear

Finally, you may need to Purge all caches on your Moodle server

Administration > Site administration > Development > Purge all caches

and in your browser

Enjoy!
