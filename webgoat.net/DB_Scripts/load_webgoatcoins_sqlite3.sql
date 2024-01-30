.separator "|"

DELETE FROM Customers;
DELETE FROM CustomerLogin;
DELETE FROM SecurityQuestions;
DELETE FROM Employees;
DELETE FROM Offices;
DELETE FROM OrderDetails;
DELETE FROM Orders;
DELETE FROM Payments;
DELETE FROM Products;
DELETE FROM Categories;
DELETE FROM Comments;

.import /var/www/webgoat.net/DB_Scripts/datafiles/customers.txt Customers
.import /var/www/webgoat.net/DB_Scripts/datafiles/customerlogin.txt CustomerLogin
.import /var/www/webgoat.net/DB_Scripts/datafiles/securityquestions.txt SecurityQuestions
.import /var/www/webgoat.net/DB_Scripts/datafiles/employees.txt Employees
.import /var/www/webgoat.net/DB_Scripts/datafiles/offices.txt Offices
.import /var/www/webgoat.net/DB_Scripts/datafiles/orderdetails.txt OrderDetails
.import /var/www/webgoat.net/DB_Scripts/datafiles/orders.txt Orders
.import /var/www/webgoat.net/DB_Scripts/datafiles/payments.txt Payments
.import /var/www/webgoat.net/DB_Scripts/datafiles/categories.txt Categories
.import /var/www/webgoat.net/DB_Scripts/datafiles/products.txt Products
