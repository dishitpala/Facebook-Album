# :beginner: Facebook-Album

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dishitpala/Facebook-Album/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dishitpala/Facebook-Album/?branch=master)
[![Build Status](https://travis-ci.org/dishitpala/Facebook-Album.svg?branch=master)](https://travis-ci.org/dishitpala/Facebook-Album)


Facebook Album is a complete UI package which provides some cool functionality. the project is well structured and well maintained 


## :rocket: Features!

  - With one click user can take backup all the images ( Google Drive / InSystem )
  - User can also backup (.zip) specific albums and multiple albums too.
  - User can view images of the particular albums and enjoy the slide-show
  - Single / Multiple albums can be downloaded as (.zip)
  - User's data is maintained in the :boom: **Google Storage Bucket** :boom: (out of the box) so its 		highly secured
  - Anywhere any time access to the the data
  

> :triumph: The app is still under the review by facebook.
> :sunglasses: if you want to experience the above features [click here](https://dishitpala.herokuapp.com)


### :ski: Technology 

Some of the technology which are used to develop the web-app:

* [HTML]() - HTML enhanced for web apps!
* [php]() - php is used for the back-end 
* [Bootstrap]() - Bootstrap is used to design the web pages
* [Jquery]() - jquery is used to increase the efficiency
* [Axios]() - Axios is used for getting the data with out page reloading


### :seedling: Prerequisites

1. Create the app on [facebook]()
2. Create account on [Google Cloude]()
	* Go to the App Engine and create bucket generate the credential file.
3. Enable the [Google Drive]() API.
	* Go to google api console and search for the Google Client API
4. Final Step:
	*  Goto credentials folder edit the credential.env file
	paste the necessary ids and secrets to .env file

### :rowboat: Installation

Download and install the [composer]() 

To install the php library. Go to library folder and run the below command

```sh
$ # To install the Facebook Graph API
$ composer requires facebook/graph-sdk
 
$ # To install Google Client API
$ composer require google/apiclient

$ # To install the Google Storage Bucket API
$ composer require superbalist/flysystem-google-storage

$ # To install vlucas/phpdotenv
$ composer require vlucas/phpdotenv
```





### :mountain_cableway: Plugins

The following plugins are used to enhance the application.

| Plugin | README |
| ------ | ------ |
| Facebook | [facebook/graph-sdk](https://github.com/facebook/php-graph-sdk) |
| Google Bucket | [superbalist/flysystem-google-storage](https://github.com/Superbalist/flysystem-google-cloud-storage) |
| Google Client | [google/apiclient](https://github.com/google/google-api-php-client)|
| Photoswipe | [photoswipe](https://github.com/dimsemenov/PhotoSwipe) |
| Icons8 | [icons8](https://icons8.com/icon/new-icons/color) |
| Bootstrap | [bootstrap](https://getbootstrap.com/) |
|phpdotenv|[vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)|


### :dart: Development & Deployment
* Full structure of the web application is based on oops and MVC Architecture
* **Heroku** is used for the hosting and **Google Bucket** is used as a filesystem.
	* Heroku is an ephemeral filesystem it dose not store files permanently
* HTTP Requests are shreaded to make applecation faster.


