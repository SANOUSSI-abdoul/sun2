package Six;
import java.util.*;
public class Directory 
{
private String dirName;
private int size;
private int nbFile;
private ArrayList<File>liste=new ArrayList<>();

public Directory(String dirName,int nbFile,int size)
{
	this.dirName=dirName;
	this.nbFile=0;
	this.size=0;
}
public void setDirName(String newDirName) 
{
dirName=newDirName;
}
public void setFile(File newFile) 
{
liste.add(newFile);
nbFile=nbFile+1;
size=size+newFile.getsize();
}
public void setName (String newName)
{
dirName=newName;
}
public int getsize() 
{
	return size;
}
public int getnumb()
{
	return nbFile;
}

public void display() 
{
System.out.println("the name is"+dirName+"the size is"+size+"the number of file"+nbFile);
}
}
