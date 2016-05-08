# LeagueWP
## A Non-Profit Starter Theme

Developer Instructions:
====

Requirements:

- node >= 0.12.9

To build all assets: 

```
$ npm install
$ npm install -g gulp
$ gulp
```

To run files in "watch" mode (dynamic recompilation) you'll need to edit gulpfile.js and replace `www.lwv.dev` with the URL of your development host. For example, if you use [VVV](https://github.com/Varying-Vagrant-Vagrants/VVV) then it'll be something like `http://src.wordpress-develop.dev/`

To just rebuild CSS files, run `gulp styles`