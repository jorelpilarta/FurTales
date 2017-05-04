<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>

<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>    
<%@ taglib prefix="sql" uri="http://java.sun.com/jsp/jstl/sql" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>
    
<%@ page import="java.io.*,java.util.*,java.sql.*" %>
<%@ page import="javax.servlet.http.*,javax.servlet.*" %>

<jsp:useBean id="now" class="java.util.Date" />
<fmt:formatDate var="currentdate" value="${now}" pattern="yy-MM-dd" />
<c:set var="date" value="${currentdate}" scope="session"  />



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
<p>Today is <%=session.getAttribute("date") %></p>
<p>You are currently logged in as <%= session.getAttribute("email") %></p>


<sql:query dataSource="${firstname}" var="result">
SELECT * 
FROM transaction INNER JOIN service_provider 
ON transaction.staff_id = service_provider.staff_id 
WHERE service_provider.sp_email="<%= session.getAttribute("email") %>" 
AND transaction.payment_status="Not Paid";
</sql:query>
<table border="1">
<tr>
<th> Transaction ID</th>
<th>Service ID</th>
<th>Client ID</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
<th>Payment Status</th>
</tr>
<c:forEach var="row" items="${result.rows}">
<tr>
<td><c:out value="${row.transaction_id}"/></td>
<td><c:out value="${row.service_id}"/></td>
<td><c:out value="${row.client_id}"/></td>
<td><c:out value="${row.transaction_date}"/></td>
<td><c:out value="${row.transaction_time}"/></td>
<td><c:out value="${row.price}"/></td>
<td><c:out value="${row.payment_status}"/></td>
<td><a href="updatedb.jsp?id=<c:out value= "${row.transaction_id}"/>">Update</a></td>
</tr>
</c:forEach>
</table>


<p><a href='history.jsp'>View Past Transactions</a></p>
<p><a href='logout.jsp'>Log out</a></p>
</body>
</html>