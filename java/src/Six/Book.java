package Six;

public class Book 
{
private String title;
private int editionNbr;
private int stock;
private Author author;
public Book(String title, int editionNbr,int stock)
{
this.title=title;
this.editionNbr=1;
this.stock=10000;
}
public int newEdition(int amount) 
{
	editionNbr=editionNbr+1;
	return stock=stock+amount;
	
}
public void setAuthor()
{
	
}
}
