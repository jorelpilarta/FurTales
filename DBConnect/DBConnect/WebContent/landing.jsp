<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>    
<%@ taglib prefix="sql" uri="http://java.sun.com/jsp/jstl/sql" %>
    
<%@ page import="java.io.*,java.util.*,java.sql.*" %>
<%@ page import="javax.servlet.http.*,javax.servlet.*" %>

<jsp:useBean id="now" class="java.util.Date" />

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Schedule</title>
</head>
<body>

<h1>Your Appointments for Today</h1>

<sql:setDataSource var="firstname" 
	driver="com.mysql.jdbc.Driver"
	url="jdbc:mysql://localhost/furtales"
	user="root"
	password=""/>

<p>You are currently logged in as <%= session.getAttribute("sp_email") %></p>

<sql:query dataSource="${firstname}" var="result">
SELECT * 
FROM transaction INNER JOIN service_provider 
ON transaction.staff_id = service_provider.staff_id 
WHERE service_provider.sp_email="<%= session.getAttribute("sp_email") %>" 
AND transaction.payment_status="Not Paid";
</sql:query>

<table border="1">
<tr>
<th>Service ID</th>
<th>Client ID</th>
<th>Price</th>
<th>Payment Status</th>
</tr>
<c:forEach var="row" items="${result.rows}">
<tr>
<td><c:out value="${row.service_id}"/></td>
<td><c:out value="${row.client_id}"/></td>
<td><c:out value="${row.price}"/></td>
<td><c:out value="${row.payment_status}"/></td>
<td><p><a href="WebContent/updatedb.jsp">Mark as Done</a></p></td>
</tr>
</c:forEach>
</table>

</body>
</html>