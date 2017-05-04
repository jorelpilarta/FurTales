

import java.io.*;

import javax.servlet.*;
import javax.servlet.http.*;

import java.sql.*;
import java.lang.*;

public class Inlog extends HttpServlet {
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	public void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        
        String sp_email = request.getParameter("sp_email");
        String sp_pw = request.getParameter("sp_pw");
        HttpSession session = request.getSession();
        session.setAttribute("email", sp_email);
        
        
        if(Validate.checkUser(sp_email, sp_pw))
        {
            RequestDispatcher rs = request.getRequestDispatcher("test.jsp");
            rs.forward(request, response);
        }
        else
        {
           out.println("Email or Password incorrect");
           RequestDispatcher rs = request.getRequestDispatcher("index.html");
           rs.include(request, response);
        }
    }
}

