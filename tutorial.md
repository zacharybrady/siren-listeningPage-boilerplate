# Tutorial #
## Siren Listening Page Boilerplate v1.0 ##


## Outline ##
1. Introduction
2. Assets
	1. Asset List
	2. Setting Up the Assets
		1. Images
		2. Audio Files
3. Planning HTML and CSS
	1. HTML
	2. CSS
4. Editing the Markup
5. Grunt
6. Styling
	1. Dependencies
	2. Variables
	3. Base styles
	4. Layout
	5. Objects
		1. Header-Footer
		2. Management 
		3. Nope
		4. Password
		5. Playlist
	6. Responsive
7. Javascript
	1. Base
	2. Music Playlist
	3. Custome JS
8. Fine Tuning


## 1. Introduction ##
This document outlines how to set use the Siren Listening Page Boilerplate to get up and running creating a Listening Website for bands or musicians. Listening websites are simple sites sent to record labels, magazines, and other interested parties that showcase the music and management information for a band/musician in advance of an LP or EP release while showcasing the artist's/band's branding. The actuall listening page is hidden behind a simple password wall. 

This tutorial will go over how to handle assets, plan and execute markup and styling, and managing the javascript.


## 2. Assets ##

### Assets Checklist ###
The following assets must be provided upon the start of the development of a listening site.

1. Design mockups and style guide
2. Images
	1. Artist/Band logo
	2. Music Player Controls
		1. Play 
		2. Pause
		3. Forward
		4. Rewind
		5. Download
	3. Additional Image Assets
3. Audio Files


### Setting Up the Assets ###

#### Images ####
Upon recieving image assets they will need to be optimized before being placed in the imagesSrc directory. The optimizers used should be:

1. JPEFMini : http://www.jpegmini.com/
2. PNGMini : http://pngmini.com/

#### Audio Files ####
Upon recieving the audio files they will have to be converted to the right audio types and organized. 

.wav versions of the music will be provided and will need to be convereted into .mp3 and .ogg files before being placed in the album directory in the music directory. http://audio.online-convert.com/ provides a simple online way to convert audio files one at a time but other converters may be used if they provide a better service.

The folder holding the original music files should also be compressed and placed in the music directory for download.


## 3. Planning HTML and CSS ##
Upon recieving mockups and/or style guides from the design team, they should be analyzed and turned into a plan for the markup and CSS. These outlines should be done in plain text and in a program or framework that allows for lists. These will not have to be followed exactly when implemented as code but should be done with care so that decission making can happen before any code is written.

### HTML ###
The markup structure should be organized as a nested, unordered list that shows nesting, element names, classes, and any possible IDs. Many listening sites shouldn't deviate greatly from the Boilerplates defaults. Examples are provided below and should be compared to the default markup for context. 

#### Ex1. Global Outline ####
- header.page_header
	- h1.page_title
- { MAIN CONTENT }
- footer.page_footer

#### Ex2. nope.php ####
- div.container.container-nope
	- div.container_inner
		- div.content
			- div.password_result
				- h2
				- a

### CSS ###
Base on the classes outlined in the markup structure and the provided mockups/style guides should give some insight as to what each class may do. It is crucial to write this out for reference. This should be done with numbered lists, be grouped by the SCSS they will reside in, and should class relationships where neccessary.

#### Ex. ####

Layout/Grid
1. .row : Simple row with a max-width of 1140px with overflow: hidden; to clear floated columns.
2. .col_hlf : A column that takes up half of its parent containers space.


Objects/Mgmt
1. .mgmt : The main container for the Management information. Has ...
	1. .mgmt_name : Makes the name bold.


## 4. Editing the Markup ##
Once a plan for the markup is created, files can be formatted with the proper markup and copy content. Markup should be well organized, easy to understand, and make use of comments liberally.


## 5. Grunt ##
All of the necessary grunt plugins for creating a Listening Page are already installed and configured. More plugins can be added as desired. Grunt watch is also installed to watch file updates and run tasks on the file. To activate Grunt watch navigate to the root directory of your project in the Terminal and enter the command "grunt watch".


## 6. Styling ##
Styling for Siren based frameworks and boilerplates is done using the SCSS preprocessing language. All necessary files (snippets and organizational files) have already been created. This section will go over how to edit these files for ease of use.

### Dependencies ###
Siren using Compass and the compass plugins Modular Scale (https://github.com/at-import/modular-scale) and Vertical Rhythm (http://compass-style.org/reference/compass/typography/vertical_rhythm/). Modular Scale outputs font sizes in "em" units based on the Perfect Fourth ratio. Vertical Rhythm generates the proper line-height, padding, and margin values to maintain proper vertical rhythm. 

#### Variables ####
