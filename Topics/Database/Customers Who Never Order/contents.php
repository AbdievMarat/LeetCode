<?php

/*
Write an SQL query to report all customers who never order anything.

Return the result table in any order.

The query result format is in the following example.

Example 1:

Input:
Customers table:
+----+-------+
| id | name  |
+----+-------+
| 1  | Joe   |
| 2  | Henry |
| 3  | Sam   |
| 4  | Max   |
+----+-------+
Orders table:
+----+------------+
| id | customerId |
+----+------------+
| 1  | 3          |
| 2  | 1          |
+----+------------+
Output:
+-----------+
| Customers |
+-----------+
| Henry     |
| Max       |
+-----------+
 */

$query = '
    SELECT
        Customers.name as Customers
    FROM
        Customers LEFT OUTER JOIN
        Orders ON Customers.id = Orders.customerId
    WHERE
        Orders.customerId IS NULL
';