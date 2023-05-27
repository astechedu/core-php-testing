<?php
//Sql syntax:

Keys: joins, Products Category Example, Ecommerce Tables Design, 
      Category And Food Tables, Sub Query Category, Category Ancedent Category_Relation Decendent, 

//-----------------------------------------------------------------------------------

//1. 

SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;


//Join Products and Categories Tables
SELECT p.id,p.name, c.category_name
FROM products p
INNER JOIN categories c ON p.id=c.category_id;



SELECT products.productname, products.price, categories.categoryname
FROM products
INNER JOIN categories
ON products.categoryid=categories.id;

//Sub Query Category
"select * from product whre prod_cat = (select cat_id from category where cat_name = '$catname')"

//-----------------------------------------------------------------------------------

//http://www.java2s.com/Code/Oracle/Table-Joins/GetCategoriesandProductswithJoins.htm


Get Categories and Products (with Joins)

   
SQL>
SQL> CREATE TABLE Product (
  2  ProductID INT NOT NULL PRIMARY KEY,
  3  Name VARCHAR(50) NOT NULL,
  4  Description VARCHAR(1000) NOT NULL,
  5  Price NUMBER NULL,
  6  ImagePath VARCHAR(50) NULL,
  7  soldout NUMBER(1,0) NULL,
  8  Promotion NUMBER(1,0) NULL);

Table created.

SQL>
SQL> CREATE SEQUENCE ProductIDSeq;

Sequence created.

SQL>
SQL> CREATE OR REPLACE TRIGGER ProductAutonumberTrigger
  2  BEFORE INSERT ON Product
  3  FOR EACH ROW
  4  BEGIN
  5     SELECT ProductIDSeq.NEXTVAL
  6     INTO :NEW.ProductID FROM DUAL;
  7  END;
  8  /

Trigger created.

SQL>
SQL> INSERT INTO Product (Name, Description, Price, ImagePath,soldout, Promotion)
  2  VALUES ('Pen', 'Ball Pen',5.99, 'pen.jpg', 1, 0);

1 row created.

SQL>
SQL> INSERT INTO Product (Name, Description, Price, ImagePath,soldout, Promotion)
  2  VALUES ('Ruler', 'Long',14.99, 'ruler.jpg', 0, 0);

1 row created.

SQL>
SQL> INSERT INTO Product (Name, Description, Price, ImagePath, soldout, Promotion)
  2  VALUES ('Desk', 'Computer Desk',5.99, 'desk.jpg', 0, 1);

1 row created.

SQL>
SQL> INSERT INTO Product (Name, Description, Price, ImagePath, soldout, Promotion)
  2  VALUES ('PC', 'Notebook',49.99, 'pc.jpg', 0, 1);

1 row created.

SQL>
SQL> INSERT INTO Product (Name, Description, Price, ImagePath, soldout, Promotion)
  2  VALUES ('Mouse', 'Wireless',9.99, 'mouse.jpg',  1, 0);

1 row created.

SQL>
SQL> INSERT INTO Product (Name, Description, Price, ImagePath, soldout, Promotion)
  2  VALUES ('Keyboard', 'keyboard',3.75, 'keyboard.jpg', 0, 0);

1 row created.

SQL>
SQL>
SQL> CREATE TABLE ProductCategory (
  2  ProductID INT NOT NULL,
  3  CategoryID INT NOT NULL,
  4  PRIMARY KEY (ProductID, CategoryID)
  5  );

Table created.

SQL>
SQL>
SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (1,3);

1 row created.

SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (2,1);

1 row created.

SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (2,3);

1 row created.

SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (3,3);

1 row created.

SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (4,1);

1 row created.

SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (5,2);

1 row created.

SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (6,3);

1 row created.

SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (6,4);

1 row created.

SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (7,4);

1 row created.

SQL> INSERT INTO ProductCategory (ProductID, CategoryID) VALUES (8,5);

1 row created.

SQL>
SQL>
SQL> CREATE TABLE Category (
  2  CategoryID INT NOT NULL PRIMARY KEY,
  3  DepartmentID INT NOT NULL,
  4  Name VARCHAR(50) NOT NULL,
  5  Description VARCHAR (200) NULL);

Table created.

SQL>
SQL> CREATE SEQUENCE CategoryIDSeq;

Sequence created.

SQL>
SQL> CREATE OR REPLACE TRIGGER CategoryAutonumberTrigger
  2  BEFORE INSERT ON Category
  3  FOR EACH ROW
  4  BEGIN
  5     SELECT CategoryIDSeq.NEXTVAL
  6     INTO :NEW.CategoryID FROM DUAL;
  7  END;
  8  /

Trigger created.

SQL> INSERT INTO Category (DepartmentID, Name, Description) VALUES (1, 'Local', 'In town');

1 row created.

SQL> INSERT INTO Category (DepartmentID, Name, Description) VALUES (1, 'Remote', 'Telecommute');

1 row created.

SQL> INSERT INTO Category (DepartmentID, Name, Description) VALUES (2, 'Masks', 'By bits');

1 row created.

SQL> INSERT INTO Category (DepartmentID, Name, Description) VALUES (3, 'Wireless', 'Not connected');

1 row created.

SQL> INSERT INTO Category (DepartmentID, Name, Description) VALUES (3, 'Wired', 'Connected');

1 row created.

SQL>
SQL>
SQL> SELECT C.Name as "Category Name", P.Name as "Product Name"
  2  FROM Product P
  3  INNER JOIN ProductCategory PC ON P.ProductID = PC.ProductID
  4  INNER JOIN Category C ON PC.CategoryID = C.CategoryID
  5  ORDER BY C.Name, P.Name;

Category Name
--------------------------------------------------
Product Name
--------------------------------------------------
Local
PC

Local
Ruler

Masks
Desk

Masks
Keyboard

Masks
Pen

Masks
Ruler

Remote
Mouse

Wireless
Keyboard


8 rows selected.

SQL>
SQL>
SQL>
SQL> drop table Product;

Table dropped.

SQL> drop table ProductCategory;

Table dropped.

SQL> drop table Category;

Table dropped.

SQL> drop sequence CategoryIDSeq;

Sequence dropped.

SQL> drop sequence ProductIDSeq;

Sequence dropped.
//-------------------------------------------------------------------------------
    
//Products Category Example:
https://stackoverflow.com/questions/50000271/use-inner-join-to-filter-products-based-on-category



SQL:

CREATE TABLE Product(
    Product_ID int NOT NULL AUTO_INCREMENT,
    Name varchar(255) NOT NULL,
    Stock_Level int NOT NULL,
    Price int NOT NULL,
    Image blob NOT NULL,
    Admin_ID int NOT NULL,
    PRIMARY KEY (Product_ID),
    FOREIGN KEY (Admin_ID) REFERENCES Admins(Admin_ID)
);

CREATE TABLE Category(
    Category_ID int NOT NULL AUTO_INCREMENT,
    Category varchar(15) NOT NULL,
    PRIMARY KEY (Category_ID)
);

CREATE TABLE ProductLookup(
    ProductLookup_ID int NOT NULL AUTO_INCREMENT,
    Product_ID int(100) NOT NULL,
    Category_ID int NOT NULL,
    PRIMARY KEY (ProductLookup_ID),
    FOREIGN KEY (Product_ID) REFERENCES Product(Product_ID),
    FOREIGN KEY (Category_ID) REFERENCES Category(Category_ID)
);



SELECT p.Name, p.Price, p.Image
FROM Product p
INNER JOIN (ProductLookup pl) ON (p.Product_ID = pl.Product_ID)
WHERE pl.Category_ID = 1



//-------------------------------------------------------------------------------

//Ecommerce Tables Design:

1. Category Table
2. Sub-Category Table


1. 
Category Table:

id   name 


2.
Sub Category Table: 

id   name  Category_id


3. Brand Tables:
   id    name


4. Brand categories pivot table
   id  brand_id  category_id 


5. Brand and subcategories pivot table

   id   brand_id   subcategory_id



//-------------------------------------------------------------------------------


//Category And Food Tables


Category Table: 

Name       Type

cat_id     int            primary key 
cat_naem   varchar(50)



Food Table: 

Name        Type     

f_id        int (11)      primary key
f_cat       varchar(5)
f_name      varchar(50)
f_price     float or double or int
f_desc      text 
f_image     text
f_keywords  txt 

//----------------------------------------------------------------------------------


//Category Ancedent Category_Relation Decendent
// https://stackoverflow.com/questions/31949292/categories-and-subcategories-from-one-mysql-table

1. 

CREATE TABLE categories (
  cat_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  cat_name VARCHAR(64),
  # Other columns...
) ENGINE=InnoDB;


2.

CREATE TABLE category_relations (
  ancestor_id INT(11) UNSIGNED,
  descendant_id INT(11) UNSIGNED,
  depth INT(11) UNSIGNED
  PRIMARY KEY (ancestor_id, descendant_id),
  FOREIGN KEY (ancestor_id) REFERENCES categories.cat_id,
  FOREIGN KEY (descendant_id) REFERENCES categories.cat_id
) ENGINE=InnoDB;


//Insert Values in both tables
INSERT INTO categories (
  cat_name
) VALUES (
  'animal'
);

//After getting the ID of the newly inserted node
INSERT INTO category_relations (
  ancestor_id, 
  descendant_id, 
  depth
) VALUES (
  1,
  1,
  0
);

//Again inserting values in table


INSERT INTO categories (
  cat_name
) VALUES (
  'feline'
);

# We'll assume the new ID is 2

INSERT INTO category_relations (
  ancestor_id, 
  descendant_id, 
  depth
) VALUES (
  2,
  2,
  0
);


//Table look like this

ancestor_id | descendant_id | depth
=============+===============+=======
           1 |             1 |     0
           2 |             2 |     0
           3 |             3 |     0
           4 |             4 |     0
           1 |             2 |     1
           2 |             3 |     1
           2 |             4 |     1
           1 |             3 |     2
           1 |             4 |     2


//Get the entire animal tree

SELECT c.*
FROM category AS c
JOIN category_relations AS r ON c.cat_id = r.descendant_id
WHERE r.ancestor_id = 1;


ancestor_id | descendant_id | depth
=============+===============+=======
           1 |             1 |     0
           1 |             2 |     1
           1 |             3 |     2
           1 |             4 |     2





//---------------------------------------------------------------------------------- 


?>