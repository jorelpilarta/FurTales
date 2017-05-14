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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/js" href="bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/js" href="bootstrap/js/jquery-3.2.1.min.js">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/test.css">
	<title>Schedule</title>
	
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
			<span style="font-size:30px;cursor:pointer" onclick="openNav()" id="openNav">&#9776</span>
		</nav>
		
		<script>
			function openNav(){
				document.getElementById("mySidenav").style.width = "250px"
			}
			
			function closeNav(){
				document.getElementById("mySidenav").style.width = "0";
			}
		</script>
		
		<p>You are currently logged in as <%= session.getAttribute("email") %></p>
		<div>
			<h3>Your Appointments for Today</h3>
			
			<sql:setDataSource var="firstname" 
				driver="com.mysql.jdbc.Driver"
				url="jdbc:mysql://localhost/furtales"
				user="root"
				password=""/>
			
			<p>Today is <fmt:formatDate pattern = "yyyy-MM-dd" value = "${now}" /></p>
	
				<sql:query dataSource="${firstname}" var="result">
				SELECT * 
				FROM service NATURAL JOIN transaction INNER JOIN service_provider 
				ON transaction.staff_id = service_provider.staff_id 
				WHERE service_provider.sp_email="<%= session.getAttribute("email") %>" 
				AND transaction.payment_status="Not Paid" 
				AND transaction.request_status="Accepted"
				AND transaction.transactions_date ="<fmt:formatDate pattern = "yyyy-MM-dd" value = "${now}" />"
				ORDER BY transactions_date ASC;
				</sql:query>
			
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Transaction ID </th>
							<th>Service Name </th>
							<th>Client ID </th>
							<th>Date </th>
							<th>Time </th>
							<th>Price </th>
							<th>Payment Status </th>
						</tr>
					</thead>
						<c:forEach var="row" items="${result.rows}">
							<tbody>
								<tr>
									<td><c:out value="${row.transaction_id}"/></td>
									<td><c:out value="${row.service_name}"/></td>
									<td><c:out value="${row.client_id }"/></td>
									<td><c:out value="${row.transactions_date }"/></td>
									<td><c:out value="${row.transaction_time }"/></td>
									<td><c:out value="${row.price }0"/></td>
									<td><c:out value="${row.payment_status }"/></td>
									<td><a href="updatedb.jsp?id=<c:out value= "${row.transaction_id }"/>"><button type="button" class="btn">Mark as paid</button></a></td>
								</tr>
							</tbody>
						</c:forEach>
				</table>
			</div>
			
		<div>
		<h3>Pending Requests</h3>
				
				<sql:query dataSource="${firstname}" var="pending">
				SELECT * 
				FROM service NATURAL JOIN transaction INNER JOIN service_provider 
				ON transaction.staff_id = service_provider.staff_id 
				WHERE service_provider.sp_email="<%= session.getAttribute("email") %>" 
				AND transaction.payment_status="Not Paid" 
				AND transaction.request_status="Pending"
				ORDER BY transactions_date ASC;
				</sql:query>
			
			<div class="table-responsive">	
			<table class="table">
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
				<c:forEach var="row" items="${pending.rows}">
				<tbody>
				<tr>
					<td><c:out value="${row.transaction_id}"/></td>
					<td><c:out value="${row.service_name}"/></td>
					<td><c:out value="${row.client_id}"/></td>
					<td><c:out value="${row.transactions_date}"/></td>
					<td><c:out value="${row.transaction_time}"/></td>
					<td><c:out value="${row.price}0"/></td>
					<td><a href="accept.jsp?id=<c:out value= "${row.transaction_id}"/>"><button type="button" class="btn">Accept</button></a></td>
					<td><a href="decline.jsp?id=<c:out value= "${row.transaction_id}"/>"><button type="button" class="btn">Decline</button></a></td>
				</tr>
				</tbody>
				</c:forEach>
			</table>
			</div>
		</div>
		<div>
		<h3>Client Info</h3>
				
				<sql:query dataSource="${firstname}" var="cinfo">
				SELECT client_id, CONCAT(first_name,' ',last_name) AS Name, client_address, client_cn, client_email 
				FROM client;
				</sql:query>
			
			<div class="table-responsive">	
			<table class="table">
				<thead>
				<tr>
					<th>Client ID</th>
					<th>Name</th>
					<th>Address</th>
					<th>Contact</th>
					<th>Email</th>
				</tr>
				</thead>
				<c:forEach var="row" items="${cinfo.rows}">
				<tbody>
				<tr>
					<td><c:out value="${row.client_id}"/></td>
					<td><c:out value="${row.Name}"/></td>
					<td><c:out value="${row.client_address}"/></td>
					<td><c:out value="${row.client_cn}"/></td>
					<td><c:out value="${row.client_email}"/></td>
				</tr>
				</tbody>
				</c:forEach>
			</table>
			</div>
		</div>
		</div>

	</body>
</html>