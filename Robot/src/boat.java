

/**
 * 
 * on represente dans ce code la classe uml bot
 */
public class boat 
{
protected double size;
protected int capacity;

/**
 * 
 * @param category type de bateau
 * @param size taille du bateau
 * @param motorized est-il motorisée ou non
 */
public boat(double size,int capacity) 
{
this.size=size;
this.capacity=capacity;
}

/**
 * getSize 
 * @return la taille du bateau
 */
public double getSize()
{
return size;	
}

/**
 * affiche un bateau
 */
public void display() 
{
System.out.println("the capacity is"+capacity+"the size is:"+size);	
}




}
