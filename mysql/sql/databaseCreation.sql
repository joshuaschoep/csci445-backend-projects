DROP TABLE IF EXISTS Orders;

DROP TABLE IF EXISTS Customers;
CREATE TABLE Customers (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255)
);

DROP TABLE IF EXISTS Products;
CREATE TABLE Products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name varchar(255),
    quantity INT,
    price DECIMAL(19,2),
    image_path varchar(255)
);

CREATE TABLE Orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    product_id INT,
    quantity INT,
    tax DECIMAL(19,2),
    donation DECIMAL(19,2),
    order_time DATETIME UNIQUE,
    FOREIGN KEY (customer_id) REFERENCES Customers(customer_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id)
);

INSERT INTO Products(product_name, price, quantity, image_path)
    VALUES
        ("Boots", 60.00, 10, "/images/boots.jpg"),
        ("Shoes", 50.00, 0, "/images/shoes.jpg"),
        ("Pants", 40.00, 5, "/images/pants.jpg"),
        ("Shirt", 30.00, 30, "/images/shirt.jpg");