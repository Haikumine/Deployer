Deployer for Haikumine
==========================

## Warnings 
* This will do basically **nothing** without a protocol translation server running in front, that is still in the works.
* **The deploy process will overwrite this file with the PocketMine README.md, be careful.**
* This is a **hack** and because of that it will have bugs.
* File saving is really weird, so taking backups will be hard.

## Deploying 
You should have

* A verified Heroku account ([here you can do it](https://heroku.com/verify))
* Heroku toolbelt
* Git

To get the app deployed you first must clone this repository by running `git clone https://github.com/Haikumine/Deployer`. This command will download the deployment scripts to run on your Heroku instance. Next you must run `cd Deployer`. Then you must run `heroku create` followed by `heroku addons:create mongolab` (*require a verified account*). Finally run `git push heroku master` and Heroku will build and run PocketMine for you.
