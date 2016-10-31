SELECT office, MAX(ord_num) AS 'max_for_2003' from( SELECT
COUNT(*) AS 'ord_num',
CONCAT('Office # ', ofs.officeCode, '. ', ofs.city, ', ', ofs.country) as 'office'
FROM orders AS o JOIN customers as c ON o.customerNumber = c.customerNumber
JOIN employees AS e ON c.salesRepEmployeeNumber = e.employeeNumber
JOIN offices AS ofs ON e.officeCode = ofs.officeCode
WHERE YEAR(o.orderDate) = '2003'
GROUP BY office
) as t;
