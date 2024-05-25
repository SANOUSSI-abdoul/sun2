package Six;
import java.util.*;
public class File 
{
private String fileName;
private String type;
private int size;

public File(String fileName, String type ,int size) 
{
this.fileName=fileName;
this.type=type;
this.size=size;
}
public int getsize() 
{
	return size;
}
public void display()
{
System.out.println("the file Name is"+fileName+"the type is"+type+"the size is"+size);	
}

}
