USE Suraj200520350;

CREATE TABLE pizza_orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    size VARCHAR(50) NOT NULL,
    toppings VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    instructions TEXT,
    date DATE NOT NULL,
    time TIME NOT NULL
);
