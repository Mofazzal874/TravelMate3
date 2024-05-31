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
**N.B**
    ```
    If you're here to copy the project for your project submission , "May God help you, brother😂😎😥"
    ```


### Database Schema Diagram
![image](https://github.com/Mofazzal874/TravelMate3/assets/35369040/6e0253b2-51f8-4b0c-8299-ec879abdf9ec)

### Main Website
![image](https://github.com/Mofazzal874/TravelMate3/assets/35369040/c385b8a4-3343-438c-b29d-d948e3976077)
### Places
![screenshot-127 0 0 1_8000-2024 05 31-17_24_25](https://github.com/Mofazzal874/TravelMate3/assets/35369040/21276486-401f-4f7f-a114-256544023b87)

### TourGuides 
![screenshot-127 0 0 1_8000-2024 05 31-17_30_43](https://github.com/Mofazzal874/TravelMate3/assets/35369040/4b7c9f2a-aab2-45a2-9cce-ef4c144bd6a3)

### Booking

![screenshot-127 0 0 1_8000-2024 05 31-17_31_47](https://github.com/Mofazzal874/TravelMate3/assets/35369040/da5f0cfe-d7da-4660-aa34-888cceaf5724)

## Dashboard Panel for Admin

![screenshot-127 0 0 1_8000-2024 05 31-17_34_39](https://github.com/Mofazzal874/TravelMate3/assets/35369040/b0b669d5-6bff-4842-bf0b-eb2ad8bf2232)
![image](https://github.com/Mofazzal874/TravelMate3/assets/35369040/62ea0c0a-6b18-4a7d-a12f-a46a99edc72e)
![image](https://github.com/Mofazzal874/TravelMate3/assets/35369040/44a6d9c6-d781-40c9-b802-7f590065fc54)
![image](https://github.com/Mofazzal874/TravelMate3/assets/35369040/1ff893af-5dbd-415d-9aab-f1aed176b089)
## Dashboard panel for tourGuides
![image](https://github.com/Mofazzal874/TravelMate3/assets/35369040/47eae2fe-8447-4318-a1b3-5feaef40d9a8)
![image](https://github.com/Mofazzal874/TravelMate3/assets/35369040/37830f4a-3124-478b-be0b-739dfffa6482)
![image](https://github.com/Mofazzal874/TravelMate3/assets/35369040/ec224e5e-0652-4af9-b18e-75c48bc15ce7)



## Dashboard for User
![image](https://github.com/Mofazzal874/TravelMate3/assets/35369040/d557bd81-9a94-428e-b3a1-2e3dc153bf65)



## Installation

To run this project locally, follow these steps:

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



  
