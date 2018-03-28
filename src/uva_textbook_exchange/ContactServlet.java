package uva_textbook_exchange;

import java.io.IOException;

import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/ContactServlet")
public class ContactServlet extends HttpServlet{
	 @Override
	   public void doGet(HttpServletRequest request, HttpServletResponse response)
	               throws IOException, ServletException {

	      doPost(request, response);
	   }
	 
	   // Redirect POST request to GET request.
	   @Override
	   public void doPost(HttpServletRequest request, HttpServletResponse response)
	               throws IOException, ServletException {
	      
	   // Set the response message's MIME type
	      response.setContentType("text/html; charset=UTF-8");
	      // Allocate a output writer to write the response message into the network socket
	      PrintWriter out = response.getWriter();
	 
	      // Write the response message, in an HTML page
	      try {
	         out.println("<!DOCTYPE html>");
	         out.println("<html><head>");
	         out.println("<link href='contact.css' rel='stylesheet'>");
	         out.println("<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>");
	         out.println("<title>Contact Servlet</title></head>");
	         out.println("<body>");

	         out.println("<p>Thanks for your feedback!</p>");
	         String message = request.getParameter("message");
	         out.println("<p>Your message was: " + message + "</p>");
	         
	         String option = request.getParameter("type");
	         out.println(option);
	         
	         out.println("</body>");
	         out.println("</html>");
	 
	         // Retrieve the value of the query parameter "username" (from text field)
	         //String username = request.getParameter("username");
	         
	      } finally {
	         out.close();  // Always close the output writer
	      }
	   }
	 
}
