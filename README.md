# Web Development (WAD)  - Advanced Phase

During the advanced phase of the Web Application Development (WAD) course, we will be focusing on back-
end web development with PHP Framework called **Laravel**. 
With this framework, we are going to create a **multiuser web application**
with “dynamic” content containing **text and images** (reviews, recipes, live hacks, forum posts,
events, etc.)

## Contributors

 - Ioan,Alexandra A. 🌈 @I429690 
 - Mihaylov,Konstantin K. 🦎 @I431166 
 - Mihaylov,Petar P. 🐱 @I429937 
 


## Learning goals

After completing this phase of the module we will be able to:
- Set up a development environment for Laravel web applications.
- Explain how the **MVC** is implemented and how it works.
- Use Composer (**package manager**).
- Use **Artisan** to enhance your development experience (**scaffolding, migration, cache cleaning**, etc.)
- Create an **environment configuration** file for the respective environments.
- Create a **controller** with actions with appropriate responses.
- Use **Blade** to create views, layouts and partial views. (**view engine**)
- Create a models.
- Bind a model to a form in the view.
- Implement **model validation** by making use of Laravel Validation class.
- Use **Eloquent** to query the database for models **(ORM)**.
- Use **migration** and **seeding** files to populate a database with tables and initial content.
- Create **authentication and authorization** functionality by making use of the built-in features of
Laravel. (example : `php artisan make:auth`)
- Create **file upload** functionalities in Laravel.

## Way of Working

The approach used in this course is **Learning-by-doing**, therefore this course is highly self-study oriented.
Besides classes, the student will have to spend a **minimum of 8 hours** (self-study) in the matter per week.
We must commit your work at least on weekly basis in
**GitLab**. It is important that you show consistent learning and improvement.

## About Composer

Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

## About Laravel CLI

Laravel includes the Artisan CLI which handles many tasks

- Creating controller & models
- Creating database migration files and running migrations
- Creating providers, events, jobs, form requests, etc
- Show routes
- Session commands
- Run Tinker
- Create custom commands

 Artisan is the command-line interface included with Laravel. Artisan provides a number of helpful commands that can assist you while you build your application.
 
`$ php artisan list` 

`$ php artisan help migrate` 

`$ php artisan make:controller TodosController` *shoud be plural* 

`$ php artisan make:model Todo -m` *shoud be singular* 

`$ php artisan make:migration add_todos_to_db -table` 

`$ php artisan migrate` 

`$ php artisan tinker`

## About Eloquent

Laravel includes the Eloquent object relational mapper

The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table. Models allow you to query for data in your tables, as well as insert new records into the table.

- Makes querying & working with the DB very easy 
- We can still use raw SQL queries if needed

## About Blade

Blade is the simple, yet powerful templating engine provided with Laravel. Blade view files use the `.blade.php` file extension and are typically stored in the 'resources/views' directory. Two of the primary benefits of using Blade are template *inheritance* and *sections*.

Blade Template Engine do handles many tasks

- Adding dynamic components
- Creating custom components

## Useful information

- [x] [Blade](https://laravel.com/docs/7.x/blade) 
- [x] [Artisan](https://laravel.com/docs/7.x/artisan)
- [x] [Composer](https://getcomposer.org/download/)
- [x] [Eloquent](https://laravel.com/docs/7.x/eloquent)

#### Additional components: 

- [ ] [Visual Studio Code](https://code.visualstudio.com/)
- [ ] [Php](https://windows.php.net/download/)
- [ ] [JetBrains/phpstorm](https://www.jetbrains.com/phpstorm/)
- [ ] [Xampp](https://www.apachefriends.org/index.html)