
CREATE TABLE client (
                client_id INT AUTO_INCREMENT NOT NULL,
                name VARCHAR(255) NOT NULL,
                cpf VARCHAR(11) NOT NULL,
                rg VARCHAR(10) NOT NULL,
                birth DATE NOT NULL,
                phone VARCHAR(20) NOT NULL,
                PRIMARY KEY (client_id)
);


CREATE TABLE address (
                address_id INT AUTO_INCREMENT NOT NULL,
                city VARCHAR(255) NOT NULL,
                client_id INT NOT NULL,
                state VARCHAR(255) NOT NULL,
                zip VARCHAR(50) NOT NULL,
                street VARCHAR(255) NOT NULL,
                complement VARCHAR(255),
                number VARCHAR(10) NOT NULL,
                PRIMARY KEY (address_id)
);


CREATE TABLE users (
                user_id INT NOT NULL,
                username VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL,
                PRIMARY KEY (user_id)
);


ALTER TABLE address ADD CONSTRAINT client_address_fk
FOREIGN KEY (client_id)
REFERENCES client (client_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
