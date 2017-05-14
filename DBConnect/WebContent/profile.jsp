<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="java.io.*,java.util.*,java.sql.*"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Your Profile Page</title>
		<link rel="stylesheet" type="text/css" href="styles/profile.css">
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
	
		<sql:setDataSource var="firstname" 
		driver="com.mysql.jdbc.Driver"
		url="jdbc:mysql://localhost/furtales"
		user="root"
		password=""/>
		
	    <sql:query dataSource="${firstname}" var="result">
			SELECT * FROM sp_details NATURAL JOIN service_provider WHERE sp_email="<%= session.getAttribute("email") %>";
		</sql:query>
		
		<h1>Your Profile Page</h1>
		
		<c:forEach var="row" items="${result.rows}">
		
		<div class="profile">
			<img style="margin-left:75px" src="images/<%= session.getAttribute("email") %>.jpg" alt="Avatar" height="200px" width="250px" />
			<div class="container">
				<h2><c:out value="${row.first_name }"/> <c:out value="${row.last_name }"/></h2>
				<h3>About Me</h3>
				<p><c:out value="${row.description }"/> </p>
				<h3>Work Experience</h3>
				<p><c:out value="${row.work_exp }"/></p>
				<h3>Favorite Pet</h3>
				<p><c:out value="${row.fav_pet }"/></p>
			</div>
	
		</c:forEach>
		
		
		<p><a href="updateprofile.jsp"><button id="desc" type="button" class="btn">Update Description</button></a>
		<a href="updateexp.jsp"><button id="exp" type="button" class="btn">Update Work Experience</button></a></p>
		<p><a href="updatefav.jsp"><button id="fav" type="button" class="btn">Update Favorite Pets</button></a>
		<a href="test.jsp"><button id="sch" type="button" class="btn">Back to Schedule</button></a></p>
		
	</div>
	</body>
</html>