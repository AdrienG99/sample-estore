#createCustomerTable

DROP TABLE IF EXISTS    'as_Customer';
CREATE TABLE 'as_Customer'
(
'customer_id' INT(4) NOT NULL AUTO_INCREMENT,
'salutation' VARCHAR(4) NOT NULL,
'first_name' VARCHAR(15) NOT NULL,
'middle_initial' VARCHAR(2) DEFAULT NULL,
'last_name' VARCHAR(15) NOT NULL,
'gender' VARCHAR(6) NOT NULL,
'email' VARCHAR(30) NOT NULL UNIQUE,
'phone' VARCHAR(15) DEFAULT NULL,
'street' VARCHAR(30) NOT NULL,
'city' VARCHAR(15) NOT NULL,
'region' VARCHAR(2) NOT NULL,
'postal_code' VARCHAR(7) NOT NULL,
'date_time' DATETIME NOT NULL,
'login_name' VARCHAR(15) NOT NULL,
'login_password' VARCHAR(32) NOT NULL,
PRIMARY KEY ('customer_id')
);























