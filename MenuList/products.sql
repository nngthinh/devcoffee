
CREATE TABLE `products` (
   `id` int UNIQUE NOT NULL,
   `name` nvarchar(40),
   `type` nvarchar(40),
   `image` nvarchar(40),
   `price` int,	
   PRIMARY KEY(id)
);

INSERT INTO products VALUES(1,'Bạc sỉu','Cà phê Việt Nam','./images/img7.webp','32000');
INSERT INTO products VALUES(2,'Cà phê đen','Cà phê Việt Nam','./images/img8.webp','32000');
INSERT INTO products VALUES(3,'Americano','Cà phê máy','./images/img10.webp','45000');
INSERT INTO products VALUES(4,'Cappuccino','Cà phê máy','./images/img11.webp','45000');
INSERT INTO products VALUES(5,'Latte','Cà phê máy','./images/img14.webp','45000');
INSERT INTO products VALUES(6,'Cold Brew truyền thống','Cold Brew','./images/img16.webp','45000');
INSERT INTO products VALUES(7,'Cold Brew phúc bồn tử','Cold Brew','./images/img17.webp','50000');
INSERT INTO products VALUES(8,'Trà Oolong vải','Trà trái cây','./images/img19.webp','45000');
INSERT INTO products VALUES(9,'Trà Oolong hạt sen','Trà trái cây','./images/img20.webp','42000');
INSERT INTO products VALUES(10,'Trà Khoai môn','Trà sữa macchiato','./images/img22.webp','42000');
INSERT INTO products VALUES(11,'Trà lài macchiato','Trà sữa macchiato','./images/img23.webp','42000');
INSERT INTO products VALUES(12,'Trà cà phê đá xay','Cà phê đá xay','./images/img28.webp','59000');
INSERT INTO products VALUES(13,'Cà phê đá xay','Cà phê đá xay','./images/img29.webp','59000');
INSERT INTO products VALUES(14,'Chanh sả đá xay','Thức uống trái cây','./images/img30.webp','45000');
INSERT INTO products VALUES(15,'Phúc bồn tử cam đá xay','Thức uống trái cây','./images/img31.webp','55000');
