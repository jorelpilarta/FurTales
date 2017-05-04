<%
session.setAttribute("email", null);
session.invalidate();
response.sendRedirect("index.html");
%>