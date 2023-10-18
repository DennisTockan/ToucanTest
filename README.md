# ToucanTech - School & Member Management

![Screenshot 2023-10-18 at 10 41 21](https://github.com/DennisTockan/ToucanTest/assets/130880613/2dc468e4-b8f3-4d9b-9368-943cc77d6b0f)

## Overview

The ToucanTech School & Member Management project is a web application that allows users to add and view members associated with various schools. It's built using PHP and the Laravel framework and uses a MySQL database to store member information.

## Prerequisites

Before you can set up and run the project, the following prerequisites must be met:

- PHP: You should have PHP installed on your local machine. You can download PHP from the official website: [PHP Downloads](https://www.php.net/downloads.php).

- Composer: Composer is a dependency management tool for PHP. You can install it by following the instructions on the official website: [Composer Installation](https://getcomposer.org/download/).

- Docker: We use Docker to provide a MySQL database instance for this project. You can download Docker from the official website: [Docker Installation](https://www.docker.com/get-started/).


## Project Setup
To set up the project on your local machine, follow the next steps:

1. Clone the repository to your local machine:
```js

```
<br>


2. Install project dependencies using Composer:
```js

```
<br>

3. Create a .env file by copying the .env.example file and updating it with your configuration:
```js

```
<br>
Update the .env file with your MySQL database configuration, including the host, username, password, and database name.

4. Generate an application key:
```js

```
<br>

5. Run the database migrations to create the necessary tables:
```js

```
<br>

6. Start the Laravel development server:
```js

```
<br>

## Usage 

Access the application in your web browser at `http://localhost:8000`.
You can add new members with their name, email address, and select the school from the provided list.
The application allows you to view members associated with a selected school.

## Database Access

To access the MySQL database, you can use Docker. Run the following command to start a MySQL container:



- Replace `<root-password>` and `<database-name>` with your preferred values.

Connect to the MySQL database using a database client (e.g., phpMyAdmin) by specifying the host, username, password, and port as configured in your .env file.
