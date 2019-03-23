--1) How many passengers have used BMTC on any given day?
SELECT COUNT(DISTINCT SERIAL_NO) FROM TICKET
WHERE DATE= NOW();


--2) How many buses are in service currently
SELECT COUNT(*) FROM BUS;


--3) How many buses are in need of a service in the near future
SELECT COUNT(*) FROM BUS
WHERE LAST_SERVICE >=NOW()+interval '3 months';


--4) Where is a particular bus stationed during nights
SELECT B.STATE,B.RTO_NO,D.LOCATION FROM DEPOT D,BUS B
WHERE D.D_ID=B.D_ID;


--5) How many tickets were sold?
SELECT COUNT(*) FROM TICKET 
WHERE DATE= NOW();


--6) What percentage of the passengers use smart cards?
SELECT COUNT(P.PASSENGER_ID)/COUNT(S.PASSENGER_ID) FROM PASSENGER P, SMART_CARD S;


--7) ticket rate from 'Kumaraswamy Layout' to 'Kadugodi'
SELECT cost FROM ticket WHERE from_source = 'Kumaraswamy Layout' and to_destination = 'Kadugodi';


--8) check smart card balance of owner with id 102615
SELECT balance FROM smart_card WHERE owner_id = '102615';


--9) smart cards with low balance less than 400 rupees
SELECT * FROM smart_card WHERE balance<400;


--10) total expenditure to government on a single day
SELECT SUM(expenditure) FROM route;


--11) number of buses from 'MAJESTIC' to 'BASVANGUDI'
SELECT COUNT(no_of_buses) FROM route WHERE origin = 'MAJESTIC' and destination ='BASVANGUDI';

--12) most expenditure incurred on which route
SELECT origin,destination FROM route
WHERE expenditure =  
(SELECT MAX(expenditure) FROM route);


--13) least expenditure incurred on which route
SELECT origin,destination FROM route
WHERE expenditure =  
(SELECT MIN(expenditure) FROM route);


--14) average number of buses in depot
SELECT AVG(no_buses) FROM depot;


--15) get the manager phone number of depot in 'MALLESHWARAM'
SELECT ph_no FROM employee WHERE role = 'manager' and d_id = (SELECT d_id FROM depot WHERE location ='MALLESHWARAM');


--16)Select all buses from depot 1 which are on route 15 
SELECT B.STATE,B.RTO_NO FROM BUS B,DEPOT D
WHERE D.D_ID='1' AND B.D_ID=B.D_ID AND CONCAT( B.STATE,B.RTO_NO) IN(SELECT CONCAT(STATE,RTO_NO) FROM BUS_ROUTES WHERE ROUTE_1=15 OR ROUTE_2 =15);