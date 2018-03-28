package uva_textbook_exchange;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class LogoutServlet
 */
@WebServlet("/LogoutServlet")
public class LogoutServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public LogoutServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doPost(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		// Set the response message's MIME type
	      response.setContentType("text/html; charset=UTF-8");
	      // Allocate a output writer to write the response message into the network socket
	      PrintWriter out = response.getWriter();
	 
	      // Write the response message, in an HTML page
			HttpSession session = request.getSession();
	      try {
	    	  
	         out.println("<!DOCTYPE html>");
	         out.println("<html><head>");
	         out.println("<link href='contact.css' rel='stylesheet'>");
	         out.println("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>");
	         out.println("<title>Contact Servlet</title></head>");
	         out.println("<body>");
	         out.println("<p>Thanks for using UVA Textbook Exchange, " + session.getAttribute("username") + "!</p>");
	         
	         out.println("<a href='index.php'>Click here to log back in.</a>");
	         
	         
	         out.println("</body>");
	         out.println("</html>");
	 
	         // Retrieve the value of the query parameter "username" (from text field)
	         //String username = request.getParameter("username");
	         
	      } finally {
	         out.close();  // Always close the output writer
	      }
	      
	      session.invalidate();
	}

}
