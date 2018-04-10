package uva_textbook_exchange;

public class textbookClass {
	private String name;
	private String author;
	private String price;
	private String negotiable;
	private String edition;
	private String condition;
	private String type;
	private String mnemonic;
	private String number;
	private String professor;
	private String section;
	
	public textbookClass() {
		name = "";
		author = "";
		professor = "";
		//price = 0;
		type = "";
		condition = "";
		//edition = 0;
		mnemonic = "";
		number = "";
		section = "";
		price = "";
		edition = "";
		negotiable = "";
	}
	
	public void setName(String n)
	{
	      this.name = n;
	}
	
	public String getName()
	{
	      return this.name;
	}
		
	public void setAuthor(String a)
	{
	      this.author = a;
	}
	
	public String getAuthor()
	{
	      return this.author;
	}
	
	public void setPrice(String p)
	{
		this.price = p;
	      //this.price = Double.parseDouble(p);
	}
	
	public String getPrice()
	{
	      return this.price;
	}
	
	public void setNegotiable(String n)
	{
		this.negotiable = n;
	}
	
	public String getNegotiable()
	{
	      return this.negotiable;
	}
	
	public void setEdition(String e)
	{
		this.edition = e;
	      //this.edition = Integer.parseInt(e);
	}
	
	public String getEdition()
	{
	      return this.edition;
	}
	
	public void setCondition(String c)
	{
	      this.condition = c;
	}
	
	public String getCondition()
	{
	      return this.condition;
	}
	
	public void setType(String t)
	{
	      this.type = t;
	}
	
	public String getType()
	{
	      return this.type;
	}
	
	public void setMnemonic(String m)
	{
	      this.mnemonic = m;
	}
	
	public String getMnemonic()
	{
	      return this.mnemonic;
	}
	
	public void setNumber(String n)
	{
	      this.number = n;
	}
	
	public String getNumber()
	{
	      return this.number;
	}
	
	public void setProfessor(String p)
	{
	      this.professor = p;
	}
	
	public String getProfessor()
	{
	      return this.professor;
	}
	
	public void setSection(String s)
	{
	      this.section = s;
	}
	
	public String getSection()
	{
	      return this.section;
	}
}
