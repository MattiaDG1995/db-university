---Query1---

SELECT *
FROM `students`
WHERE `date_of_birth` LIKE '1990%'



---Query2---

SELECT *
FROM `courses`
WHERE `cfu` > 10


---Query3---

SELECT *
FROM `students`
WHERE `date_of_birth` < '1992'



---Query4---

SELECT *
FROM `courses`
WHERE `period` LIKE 'I semestre' AND `year` = 1



---Query5---

SELECT *
FROM `exams`
WHERE `hour` > '14:00:00' AND `date` = '2020-06-20'



---Query6---

SELECT *
FROM `degrees`
WHERE `level` LIKE 'magistrale'



---Query7--- 

SELECT COUNT(*)
FROM `departments`



---Query8--- 

SELECT *
FROM `teachers`
WHERE `phone` IS null
