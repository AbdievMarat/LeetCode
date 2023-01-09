<?php

/*
Write an SQL query to find all dates' Id with higher temperatures compared to its previous dates (yesterday).

Return the result table in any order.

The query result format is in the following example.

Example 1:

Input:
Weather table:
+----+------------+-------------+
| id | recordDate | temperature |
+----+------------+-------------+
| 1  | 2015-01-01 | 10          |
| 2  | 2015-01-02 | 25          |
| 3  | 2015-01-03 | 20          |
| 4  | 2015-01-04 | 30          |
+----+------------+-------------+
Output:
+----+
| id |
+----+
| 2  |
| 4  |
+----+

Explanation:
In 2015-01-02, the temperature was higher than the previous day (10 -> 25).
In 2015-01-04, the temperature was higher than the previous day (20 -> 30).
 */

$query = '
    SELECT
        weather.id
    FROM
        weather JOIN
        weather as w ON DATEDIFF(weather.recordDate, w.recordDate) = 1 AND weather.Temperature > w.Temperature
';

$query1 = '
    SELECT
        w1.id
    FROM
        Weather AS w1, Weather AS w2
    WHERE
        DATEDIFF(w1.recordDate, w2.recordDate) = 1 AND w1.Temperature > w2.Temperature
';

$query2 = '
    SELECT
        w1.id
    FROM
        Weather AS w1, Weather AS w2
    WHERE
        w1.recordDate = DATE_ADD(w2.recordDate, INTERVAL 1 DAY) AND w1.temperature > w2.temperature
';