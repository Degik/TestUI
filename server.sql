/* admin_user tabella */
CREATE TABLE admin_user (
    adminId INT PRIMARY KEY AUTO_INCREMENT,
    adminUsername CHAR(50) NOT NULL UNIQUE KEY,
    adminPassword CHAR(255) NOT NULL
);