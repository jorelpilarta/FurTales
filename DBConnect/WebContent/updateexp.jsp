<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="java.io.*,java.util.*,java.sql.*"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update Work Experience</title>
        <link rel="stylesheet" type="text/css" href="styles/updateexp.css">
    </head>
    <body>
    
    	<div class="container">
	    <sql:setDataSource var="firstname" 
		driver="com.mysql.jdbc.Driver"
		url="jdbc:mysql://localhost/furtales"
		user="root"
		password=""/>
		
	    <sql:query dataSource="${firstname}" var="result">
			SELECT * FROM sp_details NATURAL JOIN service_provider WHERE sp_email="<%= session.getAttribute("email") %>";
		</sql:query>
		
		<c:forEach var="row" items="${result.rows}">
		
		<form method="post">
		<textarea style="height: 200px; width: 400px;" name="work_exp"> <c:out value="${row.work_exp}" /> </textarea>
		<br>
		<input id="sub" type="submit" value="submit">
		</form>
		</c:forEach>
		
		<c:if test="${pageContext.request.method=='POST'}">
			<c:catch var="exception">
				<sql:update dataSource="${firstname}" var="updatedTable">
    				UPDATE sp_details SET work_exp = ? WHERE sp_email="<%= session.getAttribute("email") %>";
    				<sql:param value="${param.work_exp}" />
				</sql:update>
				<c:if test="${updatedTable>=1}">
					<p id="response">Thank you! Work experience has been updated.</p>
				</c:if>
			</c:catch>
			<c:if test="${exception!=null}">
				<b>Exception : </b>
				<c:out value="${exception}" />
			</c:if>
		</c:if>
		
		<p><a href="profile.jsp"><button id="prf" type="button" class="btn">View Profile</button> </a>
		<a href="test.jsp"><button id="sch" type="button" class="btn">Back to Schedule</button></a></p> 
		</div>
    </body>
</html>