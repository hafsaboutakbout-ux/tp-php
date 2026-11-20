CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  quantity INT NOT NULL
);

INSERT INTO products (name, price, quantity) VALUES
('Clavier', 250.00, 10),
('Souris', 150.00, 25),
('Écran 24 pouces', 1200.00, 5),
('Casque audio', 450.00, 8),
('Webcam', 320.00, 12);