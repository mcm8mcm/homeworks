SELECT 
CONCAT(e.firstName, ' ', e.lastName, ', ', jobTitle) as 'employe',
COUNT(*) AS 'ord_count'
FROM orders AS o JOIN customers as c ON o.customerNumber = c.customerNumber
JOIN employees AS e ON c.salesRepEmployeeNumber = e.employeeNumber
GROUP BY employe;