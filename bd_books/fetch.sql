select p.title as 'publisher',
b.title as 'title', 
CONCAT(a.first_name, ' ', last_name) as 'author',
b.publish_year as 'pub_year' 
from  book as b JOIN author as a on b.author_id = a.id
JOIN publisher as p on b.publisher_id book= p.id
ORDER BY publisher;