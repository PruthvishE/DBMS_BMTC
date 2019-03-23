-- DELETE ALL THE EXPIRED(more than a year old) TICKETS FROM TICKET TABLE
DELETE FROM TICKET WHERE TICKET_NO IN 
(SELECT TICKET_NO FROM TICKET WHERE DATE>=NOW()-INTERVAL '1 YEAR');