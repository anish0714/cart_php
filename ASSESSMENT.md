
# Marks: 56/100

## General Remarks
Unfortunately, lot of easy marks lost by not following the requirements. If there is anything that is not clear in the requirements, please use the Friday lab to schedule some time to discuss. Please ensure that this is addressed in assignment 2.

## Proper use of VSTS/Git: 20/20%
Contributions by all members

## Correct and complete MySQL implementation: 18/20%
1. It is not very clear what kind of data "purchase_history" records. There are couple of ways this can be done: save a json string with details of purchase that was made, or create an "orders" table that records the purchase with purchase_history referencing the orders table. 
2. Usually the recommended way of passing db schema is to export the db.sql from phpmyadmin, but thank you for providing a script to create the tables.

## Correct and complete PHP API endpoints: 18/30%
### User endpoint:
1. You are using a GET request for authentication which is not recommended. This would mean that the password is exposed in the URL and using end to end encryption does not hide the data in the URL.
2. There are no endpoints to get a user, modify a user, or delete a user record. From the point of view of your web application, how would the client get the details of the logged in user to show on user profile page?
4. Password is not encrypted.
5. No session created when the user is authenticated. How would you protect the endpoints from unauthorized users?

### Other endpoints
Similar issues as described above. No endpoints to modify product data. Standard RESTFUL Crud operations not implemented.

## Full suite of Postman tests: 0/30%
You are required to submit the exported postman collection json file like you were provided one with your lab. 

## Expectations from Asisgnment 2
From an application perspective, you will need to brainstorm the following:
1. How can you provide an endpoint to enable authentication?
2. How can you ensure that only logged in users can access an endpoint?
3. How can you ensure that the password saved in the database is encrypted?
4. What basic sanity checks do you need to do on the backend to ensure that required fields are filled out, duplication of unique columns is avoided?
5. How can you retreive information relevant to the users? For example, the Carts REST API does not have a way to retrieve the cart of a user by user id. How will the application be able to find the cart of its logged in user? Same for comments.
