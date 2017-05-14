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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/js" href="bootstrap/css/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="styles/history.css">
<title>History</title>
</head>
<body>
	<nav class="navbar">
			<nav class="sidenav" id="mySidenav">
				<img src="images/logo.png" id="avatar">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="profile.jsp">Profile</a>
				<a href="history.jsp">Past Transactions</a>
				<a href="logout.jsp">Log out</a>
			</nav>
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776</span>
		</nav>
		
		<script>
			function openNav(){
				document.getElementById("mySidenav").style.width = "250px"
			}
			
			function closeNav(){
				document.getElementById("mySidenav").style.width = "0";
			}
		</script>

	<h3>MY PAST TRANSACTIONS</h3>
	<sql:setDataSource var="firstname" 
	driver="com.mysql.jdbc.Driver"
	url="jdbc:mysql://localhost/furtales"
	user="root"
	password=""/>

<p>You are currently logged in as <%= session.getAttribute("email") %></p>


<sql:query dataSource="${firstname}" var="result">
SELECT * 
FROM service NATURAL JOIN transaction INNER JOIN service_provider 
ON transaction.staff_id = service_provider.staff_id 
WHERE service_provider.sp_email="<%= session.getAttribute("email") %>" 
AND transaction.payment_status="Paid";
</sql:query>

<div style="overflow-x: auto;">
<table class="table table-striped">
<thead>
<tr>
<th>Transaction ID</th>
<th>Service Name</th>
<th>Client ID</th>
<th>Date</th>
<th>Time</th>
<th>Price</th>
</tr>
</thead>
<c:forEach var="row" items="${result.rows}">
<tbody>
<tr>
<td><c:out value="${row.transaction_id}"/></td>
<td><c:out value="${row.service_name}"/></td>
<td><c:out value="${row.client_id}"/></td>
<td><c:out value="${row.transactions_date}"/></td>
<td><c:out value="${row.transaction_time}"/></td>
<td><c:out value="${row.price}"/></td>
</tr>
</tbody>
</c:forEach>
</table>
</div>

<a href="test.jsp"><button id="sch" type="button" class="btn">Back to Schedule</button></a>

</body>
</html>