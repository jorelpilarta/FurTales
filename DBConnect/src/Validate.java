import java.sql.*;

public class Validate {
	public static boolean checkUser(String sp_email,String sp_pw) 
    {
     boolean st =false;
     try{

	 //loading drivers for mysql
        Class.forName("com.mysql.jdbc.Driver");

	 //creating connection with the database 
        Connection con=DriverManager.getConnection
                       ("jdbc:mysql://localhost:3306/furtales","root","");
        PreparedStatement ps =con.prepareStatement
                            ("select * from service_provider where sp_email=? and sp_pw=?");
        ps.setString(1, sp_email);
        ps.setString(2, sp_pw);
        ResultSet rs =ps.executeQuery();
        st = rs.next();

        
     }catch(Exception e)
     {
         e.printStackTrace();
     }
        return st;                 
 }   
}
