package Six;

import java.util.ArrayList;

public class Author 
{
private String lastName;
private String firstname;
private int age;
private ArrayList<Book>liste=new ArrayList<>();
 public Author( String lastName,String firstname, int age) 
 {
	 this.firstname=firstname;
	 this.lastName=lastName;
	 this.age=age;
 }
 
}
