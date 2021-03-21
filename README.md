# Task 1: Online Store

This task is part of assessment as Backend Engineer at Evermos.

## Prologue
We are members of the engineering team of an online store. When we look at ratings for our online store application, we received the following facts:
1. Customers were able to put items in their cart, check out, and then pay. After several days, many of our customers received calls from our Customer Service department stating that their orders have been canceled due to stock unavailability.
2. These bad reviews generally come within a week after our 12.12 event, in which we held a large flash sale and set up other major discounts to promote our store.

After checking in with our Customer Service and Order Processing departments, we received the following additional facts:
1. Our inventory quantities are often misreported, and some items even go as far as having a negative inventory quantity.
2. The misreported items are those that performed very well on our 12.12 event.
3. Because of these misreported inventory quantities, the Order Processing department was unable to fulfill a lot of orders, and thus requested help from our Customer Service department to call our customers and notify them that we have had to cancel their orders.

## Problem
1. Misreported quantities of the items.
2. Some items even go as far as having a negative inventory quantity.

## Solution
1. Create some interface to handle quantities update.
2. Add flag to separate flow between cart and checkout, to prevent customer to pay item which is not in stock.
3. Handle stock update ( handle negative value of stock).

## Run this api

1. Clone this git 

    ```
    https://github.com/aldiandika/task_1.git
    ```

2. Install dependency

    by running `composer install`

3. Setup Environment variable

    ```
    cp .env.example .env
    ```

    Generate key

    ```
    php artisan key:generate
    ```

    Set database name, user, and password in .env file.

4. Migrate database
    ```
    php artisan migrate
    ```



