<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="java.io.*,java.util.*,java.sql.*"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update Work Experience</title>
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
		
		<c:forEach var="row" items="${result.rows}">
		
		<form method="post">
		<textarea style="height: 200px; width: 400px;" name="fav_pet"> <c:out value="${row.fav_pet}" /> </textarea>
		<br>
		<input type="submit" value="submit">
		</form>
		</c:forEach>
		
		<c:if test="${pageContext.request.method=='POST'}">
			<c:catch var="exception">
				<sql:update dataSource="${firstname}" var="updatedTable">
    				UPDATE sp_details SET fav_pet = ? WHERE sp_email="<%= session.getAttribute("email") %>";
    				<sql:param value="${param.fav_pet}" />
				</sql:update>
				<c:if test="${updatedTable>=1}">
					<font size="5"> Congratulations ! Data inserted
					successfully.</font>
				</c:if>
			</c:catch>
			<c:if test="${exception!=null}">
				<b>Exception : </b>
				<c:out value="${exception}" />
			</c:if>
		</c:if>
		
		<p><a href="profile.jsp"> View Profile </a></p> 
		<p><a href="test.jsp"> Back to Schedule </a></p> 

    </body>
</html>