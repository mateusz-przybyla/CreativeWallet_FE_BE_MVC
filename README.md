# CreativeWallet

Final stage of a Web Application using professional PHP (OOP), SQL and custom MVC framework.

## Table of contents

- [Overview](#overview)
  - [Stages](#stages)
  - [About](#about)
  - [Framework](#framework)
  - [Database design](#database-design)
  - [Screenshot](#screenshot)
- [My process](#my-process)
  - [Built with](#built-with)
  - [Useful resources](#useful-resources)

## Overview

### Stages

Stages of building a budget application:

1. PersonalBudget - console budget app written in C++:

- Structured paradigm [link](https://github.com/mateusz-przybyla/PersonalBudget_Structured)
- OOP paradigm [link](https://github.com/mateusz-przybyla/PersonalBudget_ObjectOriented)

2. CreativeWallet - web budget app written in PHP:

- Frontend [link](https://github.com/mateusz-przybyla/CreativeWallet_FE) - used HTML, CSS, JavaScript and Bootstrap library
- Frontend + Backend [link](https://github.com/mateusz-przybyla/CreativeWallet_FE_BE) - used PHP (structured paradigm)
- Frontend + Backend - used PHP (OOP paradigm) with custom MVC Framework

### About

CreativeWallet is a web app and a new version of PersonalBudget app written in C++.

An application allows you to keep records of your expenses and incomes.
Data are saved to the database (MariaDB).

How does it work?

First create a user account, sign in and then you can add incomes and expenses with today's date or with a selected backdate.
You can show current month's balance, previous month's balance or selected period balance. The application calculates the sum of incomes, expenses and the difference between them (incomes - expenses).

Other functionalities:

- a tabular summary of the incomes and expenses (by category),
- a pie chart showing expenses from the selected period,
- add/edit/delete categories and payment methods,
- add monthly limit to expense categories,
- change password,
- delete account with related transactions.

### Framework

CreativeWallet consist of two components - application and custom framework. Application compoment has a specific code which is tightly coupled to project and it wouldn't work separately without making major adjustments. Framework component has a specific code but this code is portable and flexible.

This project also uses MVC design pattern which is responsible for splitting code (dividing responsibilities) into separate files (separation of concerns principle).

The MVC pattern is an acronym for Model-View-Controller:

- Model refers to the database logic,
- View refers to the HTML or template of a page,
- Controller refers to the logic for the page.

Framework component consists of several tools:

- Router
- Validator
- Database
- Template Engine
- Container

App class inside the framework component is like a glue for the available tools and utilizes every tools in our framework.

### Database design

[DB project](https://github.com/mateusz-przybyla/CreativeWallet_FE_BE/blob/main/DB_project.pdf)

### Screenshots

- Home page:

  ![](/readme/home.jpg)

- Sign up form:

  ![](/readme/sign-up.jpg)

- Sign in form:

  ![](/readme/sign-in.jpg)

- New income form:

  ![](/readme/add-income.jpg)

- Frontend and backend form validation:

  ![](/readme/form-validation.jpg)

- New expense form with information about monthly category limit, money spent and money left for this category:

  ![](/readme/add-expense.jpg)

- Balance sheet - show categories of expenses and incomes at selected time:

  ![](/readme/show-balance1.jpg)

- Balance sheet - list of income/expense categories and expenses pie chart:

  ![](/readme/show-balance2.jpg)

- Transaction settings - add/edit/delete categories or payment methods:

  ![](/readme/transaction-settings.jpg)

- Transaction settings - expense limit activation:

  ![](/readme/expense-limit-activation.jpg)

- User account settings:

  ![](/readme/user-account-settings.jpg)

- Mobile view:

  ![](/readme/mobile.jpg)

## My process

### Built with

Frontend:

- Bootstrap library,
- HTML,
- CSS,
- JavaScript,
- jQuery Library,
- JavaScript Chart library

Backend:

- OOP PHP, PDO library,
- design patterns: MVC, singleton pattern, factory pattern, dependency injection,
- Reflective programming (Reflective class),
- custom Exceptions,
- Composer and Packagist.
- SQL queries,
- development stage - XAMPP (database MySQL, Apache server and PHPMyAdmin graphics overlay)

### Useful resources

- https://www.udemy.com/course/complete-modern-php-developer/
- https://www.php.net/manual/en/
- https://getcomposer.org/
- https://regex101.com/
- https://json-ld.org/
- https://mariadb.com/
- https://www.php-fig.org/psr/
- https://miroslawzelent.pl/kurs-php/
- https://miroslawzelent.pl/kurs-mysql/
- https://miroslawzelent.pl/kurs-bootstrap/
- https://getbootstrap.com
- https://www.php.net
- https://canvasjs.com/
- https://www.geeksforgeeks.org
- https://stackoverflow.com
- https://jquery.com/
