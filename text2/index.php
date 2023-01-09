Query con GROUP BY

---1--- 

SELECT `year`, COUNT(*) as iscritti 
FROM `courses`
 GROUP BY `year`;



 ---2--- 

 SELECT office_address, COUNT(*) as insegnanti
 FROM `teachers` 
 GROUP BY `office_address`;


 ---3--- 

SELECT exam_id AS esame, AVG(vote) as media_voto 
FROM `exam_student` 
GROUP BY exam_id;


---4--- 

SELECT department_id AS dipartimento, COUNT(*) AS corsi
FROM `degrees`
GROUP BY `department_id`;



Query con JOIN

---5--- 

SELECT `students`.`name`AS Nome, `students`.`surname`AS Cognome
FROM `students`
JOIN `degrees` ON `students`.`degree_id` = `degrees`.`id`
WHERE `degrees`.`name` = 'Corso di Laurea in Economia';


---6--- 

SELECT degrees.*
FROM degrees
JOIN departments ON degrees.department_id = departments.id
WHERE departments.name = 'Dipartimento di Neuroscienze' AND degrees.level = 'magistrale'


---7--- 

SELECT *
FROM courses
JOIN course_teacher ON courses.id = course_teacher.course_id
JOIN teachers ON course_teacher.teacher_id = teachers.id
WHERE teachers.id = 44


---8---

SELECT students.*, degrees.name, departments.name
FROM students
JOIN degrees ON students.degree_id = degrees.id
JOIN departments ON degrees.department_id = departments.id
ORDER BY students.surname, students.name; 


---9--- 

SELECT degrees.*, courses.*, teachers.*
FROM degrees
JOIN courses ON degrees.id = courses.degree_id
JOIN course_teacher ON courses.id = course_teacher.course_id
JOIN teachers ON course_teacher.teacher_id = teachers.id











