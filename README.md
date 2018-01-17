# govStrap

## Overview

This project is a govCMS7 light weight bootstrap base theme.

### Work with it locally

#### Requirements
- [npm](https://www.npmjs.com/)
- [git](https://git-scm.com/)

#### Build and compile assets

Install the npm modules

    $ cd MYPROJECT
    $ npm (or yarn) install

Compile the assets

    $ cd MYPROJECT
    $ npm (or yarn) run prod (or dev)

Watch for changes and compile the assets

    $ cd MYPROJECT
    $ npm (or yarn) run watch

Watch for changes and compile the assets with browserSync

    $ cd MYPROJECT
    $ npm (or yarn) run browser-sync

#### Durpal-VM

Visit [Drupal VM](http://www.drupalvm.com/) for more details.

##### Install dependencies

Download the Drupal VM dependencies listed in [Drupal VM's README](https://github.com/geerlingguy/drupal-vm#quick-start-guide).

If you're running [Homebrew](http://brew.sh/index.html) on Mac OSX, this is as simple as:

    brew tap caskroom/cask
    brew install ansible
    brew cask install virtualbox vagrant

##### Boot the VM

```cd``` into this project directory then run ```vagrant up```

##### Knowing issues

 * [Virtualbox 5.2.0 and Vagrant 2.0.0](https://github.com/hashicorp/vagrant/issues/9090)
