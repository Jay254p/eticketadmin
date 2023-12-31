# eTicket Admin

eTicket Admin is a web application designed to streamline ticket management for events and venues. It provides a user-friendly interface for administrators to manage and organize tickets efficiently.


## Features

- Ticket creation and management.
- Event and venue management.
- User authentication and role-based access control.
- Dashboard for data visualization.
- Email notifications for ticket updates.
- Integration with MySQL database.
- and more...

## Getting Started

These instructions will help you set up and run the eTicket Admin locally for development and testing purposes. See deployment for notes on how to deploy the project to a live system.

### Prerequisites

- [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/) installed on your machine.
- [MySQL](https://www.mysql.com/) database instance.

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/Jay254p/eticketadmin.git

2. Navigate to the project directory:

    ```bash
    cd eticketadmin

3. Install the project dependencies:
   ```bash
   npm install
   
4. Create an .evn file
   ```bash
    PORT=3000
    MYSQL_HOST=your_mysql_host
    MYSQL_USER=your_mysql_user
    MYSQL_PASSWORD=your_mysql_password
    MYSQL_DATABASE=your_mysql_database
    SECRET_KEY=your_secret_key_here

5. Start the application:
   ```bash
   npm start
6. Access the application in your web browser at 'http://localhost:3000'.

