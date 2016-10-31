SELECT 
YEAR(o.orderDate) AS 'order_year', 
SUM(od.priceEach * od.quantityOrdered) AS 'ord_sum',
CONCAT(e.firstName, ' ', e.lastName, ', ', jobTitle) as 'employe'
FROM orders as o JOIN orderdetails as od ON o.orderNumber = od.orderNumber
JOIN customers as c ON c.customerNumber = o.customerNumber
JOIN employees as e ON e.employeeNumber = c.salesRepEmployeeNumber
WHERE o.shippedDate IS NOT NULL
GROUP BY YEAR(order_year), o.orderNumber
ORDER BY ord_sum DESC
LIMIT 5
;
