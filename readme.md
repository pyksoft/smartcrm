

### Smartpoint CRM [![Build Status](https://travis-ci.org/Bottelet/Smartpoint-crm.svg?branch=develop)](https://travis-ci.org/Bottelet/Smartpoint-crm)
Smartpoint is a new customer relationship management system (CRM) which purpose is to help you keep track of your customers, tasks etc. Smartpoint is a free, open-source and self-hosted platform based on Laravel 5.4 PHP Framework.

![page_design](https://cloud.githubusercontent.com/assets/15610490/16659700/903393ac-446b-11e6-969c-831fcd698a06.PNG)


## Get started

I would like to refer to the wiki, for help on getting started

* [Installation](https://github.com/Bottelet/Smartpoint-crm/wiki/Install)
* [Installation with Docker](https://github.com/Bottelet/Smartpoint-crm/wiki/Install-using-Docker)
* [Insertion of dummy data](https://github.com/Bottelet/Smartpoint-crm/wiki/Insertion-of-dummy-data)

## Demo site
Smartpoint can be "browsed/tested" on the [Smartpoint-demo](http://ec2-34-248-108-133.eu-west-1.compute.amazonaws.com).. Database is reseeded every 24 hr. 

login:

admin@admin.com

admin123

## Features overview
- Tasks management
- Leads management
- Simple invoice management
- Easy & simple time management for each task
- Role management (Create and update your own roles)
- Easy configurable settings
- Client overview (Keep easy track of open tasks for each client etc)
- Upload documents to each clients (easy track of contracts and more)
- Fast overview over your own open tasks, leads etc
- Global dashboard


### To-do

Smartpoint is still under development, so there are a lot on my to-do list.

- Multiple integrations (Slack, e-conomic, Google Drive, dropbox etc.)
- Different Color schemes
- API
- Excel Import/export
- Better cache
- Even easier installation

And much more (in no particular order)

### Contribution Guide
Smartpoint CRM follows [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standard.

All test should pass on Travis, or the failed test should be rewritten to fit new changes 

Translation... You can help translating Smartpoint-crm into other languages, by copying the resources/lang/en folder into for example resources/lang/de and translate the files, found inside the folder.

### Packages
The packages used are the following...

- [LaravelCollective](https://github.com/LaravelCollective/html)
- [laravel-datatables](https://github.com/yajra/laravel-datatables)
- [Entrust](https://github.com/Zizaco/entrust)


### License

Smartpoint is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
