<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>    
<%@ taglib prefix="sql" uri="http://java.sun.com/jsp/jstl/sql" %>
    
<%@ page import="java.io.*,java.util.*,java.sql.*" %>
<%@ page import="javax.servlet.http.*,javax.servlet.*" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>History</title>
</head>
<body>
	<h3>My past Transactions</h3>
	<sql:setDataSource var="firstname" 
	driver="com.mysql.jdbc.Driver"
	url="jdbc:mysql://localhost/furtales"
	user="root"
	password=""/>

<p>You are currently logged in as <%= session.getAttribute("email") %></p>


<sql:query dataSource="${firstname}" var="result">
SELECT * 
FROM transaction INNER JOIN service_provider 
ON transaction.staff_id = service_provider.staff_id 
WHERE service_provider.sp_email="<%= session.getAttribute("email") %>" 
AND transaction.payment_status="Paid";
</sql:query>

<table border="1">
<tr>
<th> Transaction ID</th>
<th>Service ID</th>
<th>Client ID</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
</tr>
<c:forEach var="row" items="${result.rows}">
<tr>
<td><c:out value="${row.transaction_id}"/></td>
<td><c:out value="${row.service_id}"/></td>
<td><c:out value="${row.client_id}"/></td>
<td><c:out value="${row.transaction_date}"/></td>
<td><c:out value="${row.transaction_time}"/></td>
<td><c:out value="${row.price}"/></td>
</tr>
</c:forEach>
</table>

<a href="test.jsp"><p> Back to Schedule </p></a> 

</body>
</html>