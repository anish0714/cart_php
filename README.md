# Introduction 
E-commerce - In this project we have created api for adding and viewing user, comments, products and cart.

# Steps to get Started
1. Open Xampp
2. Start server.
3. Start mysql
4. click on mysql admin
5.  Click on assignment1 to view tables
6. 4 tables will appear namely cart,comment,product and user
7. Click on any table to view attributes and data
6. Click on insert after selecting a table if willling to enter directly from phpMyAdmin
7.  All the actions can be done there.
8.  To hit the API's in postman for GET we can pass the source with local host to get the desired results.
9.  To hit the API's in postman for POST we can pass the source with local host and then click on body-->raw and type the desired values to be inserted in table.
10.  After all the actions results can be seen in phpMyAdmin.

# APIs Working
1. validate user API:
This API is used to authenticate user whether the user is present in database or not. If not it gives an error message. Also we can see the product history of the user if the user is already
registered. It can be given in format (x:y) where x is product id and y is product quantity. Both needs to be valid numeric values.
2. add users API:
This API is used to insert a user to the database where are the required information is stored and thereafter connection is closed.
3. carts API:
This API is used to view the products present int the cart and we can only get the information using user id only.
4.add_users API:
This API is used to add products to the cart where all the necessary information is asked from the user.
5. Comments API: 
This API is used to see the comments on a product and can only be retrieved using product id.
6.comments_insert API:
This API is used to insert a comment on a product.
7. Product API:
This API is used to view the particular product using product id.
8. Products API:
This API is used to view all the products present.
9. product_insert API:
This API is used to make an entry of products to the database where all the required fields need to be appropriately filled. 


# Additional Imporant Files
1. Connection.php :
In this we have applied database security so that no data is stolen and only the verified crowd can surf on site. You cannot run connection.php without executing any other file.
2. close_connection.php
This closes the connection as soon as our execution is done.
3. Tables.php
This file has all the commands for sql where we are creating our table and all the desired attributes are asked.
