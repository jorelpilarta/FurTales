<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="java.io.*,java.util.*,java.sql.*"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix="sql"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
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
		
		<p><c:out value="${param.id}" /> </p>
		
		<sql:update dataSource="${firstname}" var="count">
			UPDATE transaction SET payment_status = "Paid" WHERE transaction_id='${param.id}'
		</sql:update>
		<c:if test="${count>=1}">
			<p> Successful! </p>
		</c:if>	
		<a href="test.jsp"><p> Back to Schedule </p></a> 
	
	

    </body>
</html>