<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="java.io.*,java.util.*,java.sql.*"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Accepted</title>
    </head>
    <body>
    
    
	    <sql:setDataSource var="firstname" 
		driver="com.mysql.jdbc.Driver"
		url="jdbc:mysql://localhost/furtales"
		user="root"
		password=""/>
		
	    <sql:query dataSource="${firstname}" var="result">
			SELECT * from transaction where transaction_id=?;
			<sql:param value="${param.id}" />
		</sql:query>
			
		<sql:update dataSource="${firstname}" var="count">
			UPDATE transaction SET request_status = "Accepted" WHERE transaction_id='${param.id}'
		</sql:update>
		<c:if test="${count>=1}">
			<p> You have successfully accepted a booking with a Transaction ID of <c:out value="${param.id}" /></p>
		</c:if>	
		<p><a href="test.jsp"> Back to Schedule </a></p> 

    </body>
</html>