<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="java.io.*,java.util.*,java.sql.*"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Your Profile Page</title>
	</head>
	<body>
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
		
		<div> 
			<img src="images/<%= session.getAttribute("email") %>.png" />
		</div>
		
		<div>
		<h2><c:out value="${row.first_name}"/>  <c:out value="${row.last_name}"/> </h2>
		</div>
		
		<h3>About Me</h3>
		<div>
		<p> <c:out value="${row.description}"/> </p>
		</div>
		
		<h3>Work Experience</h3>
		<div>
		<p> <c:out value="${row.work_exp}"/> </p>
		</div>
		
		<h3>Favorite Pets</h3>
		<div>
		<p> <c:out value="${row.fav_pet}"/> </p>
		</div>
		
		</c:forEach>
		
		<p><a href="updateprofile.jsp">Update Description</a></p>
		<p><a href="updateexp.jsp">Update Work Experience</a></p>
		<p><a href="updatefav.jsp">Update Favorite Pets</a></p>
	
	</body>
</html>