# TravelMate

<b>TravelMate</b> is a web application developed using the <b>Laravel framework</b> for the <b>CSE3100 Web Programming Laboratory</b>. It provides a platform for users to explore travel destinations, book tours, communicate with tour guides, and manage their travel plans. The project is designed to facilitate smooth interactions between users, tour guides, and travel service providers.

## Features

### User Management
- **Multi-user system**: There are 4 types of user - user , admin, manager ,tourGuide.
- **User**:A typical user can book tourGuides , hotels , restaurant , resort etc for a price and can also see all the details for a destination
- **Admin**: An Admin is person of the company ...Admin holds all the power to operate CRUD operation on anything on the website(well , not the users information).

## Technical Details

- **Framework**: Laravel
- **Database**: MySQL
- **Server**: XAMPP control panel used for local development and testing



## Project Overview

### Database Schema Diagram
### Main Website
### Places
### TourGuides 

### Booking


## Dashboard Panel for Admin

## Dashboard panel for tourGuides

## Dashboard for User


## Installation

To run this project locally, follow these steps:

0.**N.B**
    ```
    If you're here to copy the project for your project submission , "May God help you, brother😂😎😥"
    ```

1. **Clone the repository**
   ```bash
   git clone https://github.com/Mofazzal874/TravelMate3.git
   cd TravelMate3
2. **Install dependencies**
    ```bash
    composer install
    npm install
    ```
    npm install is not necessarily needed
3. **Copy the .env file and configure the environment**
    ```bash
    cp .env.example .env
    php artisan key:generate

4. **Configure the database in .env**
    ```bash
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
5. **Run database migrations**
    ```bash
    php artisan migrate
6. **Serve the application**
    ```bash
    php artisan serve
### **Contributing**
Contributions are welcome! Please fork the repository and create a pull request with your changes. Ensure your code follows the project's coding standards and includes appropriate tests.



  