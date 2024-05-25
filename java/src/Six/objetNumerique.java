package Six;

import java.util.ArrayList;

public class objetNumerique 
	{
	protected String brand;
	protected String model;
	protected String serieNumber ;

	public objetNumerique(String Brand, String model, String serieNumber)
	{
		this.brand=Brand;
		this.model=model;
		this.serieNumber=serieNumber;
	}
	
	public String getBrand() 
	{
	return brand;	
	}
	public String getPhoneNumber() 
	{
	return serieNumber;	
	}
	public String getModel() 
	{
	return model;	
	}
	public void SetPhoneNumber(String newPhoneNumber) 
	{
	 serieNumber=newPhoneNumber;	
	}
	public void display1()
	{
	System.out.println("the brand is"+brand+"the model is"+model+"the number"+serieNumber);	
	}
	public class Smartphone extends objetNumerique
	{
		private int phoneNumber;
		public Smartphone(String Brand, String model , String serieNumber,int phoneNumber) 
		{
			super(Brand,model,serieNumber);
			this.brand=Brand;
			this.model=model;
			this.serieNumber=serieNumber;
			this.phoneNumber=phoneNumber;
		}
	}
	public class Tablette extends objetNumerique
	{
		private int surface;
		public Tablette(String Brand, String model , String serieNumber,int surface) 
		{
			super(Brand,model,serieNumber);
			this.brand=Brand;
			this.model=model;
			this.serieNumber=serieNumber;
			this.surface=surface;
		}
		public void afficher() 
		{
			System.out.println("the brand is"+brand+"the model is"+model+"the number"+serieNumber+"la surface :"+surface);
		}
	}
	public class Computer extends objetNumerique
	{
		private ArrayList<String>liste_ex=new ArrayList<>();
		public Computer(String Brand, String model , String serieNumber) 
		{
			super(Brand,model,serieNumber);
			this.brand=Brand;
			this.model=model;
			this.serieNumber=serieNumber;
			
		}
		public void addexpl(String newexpl) 
		{
			liste_ex.add(newexpl);
		}
		public void afficher() 
		{
			System.out.println("the brand is"+brand+"the model is"+model+"the number"+serieNumber+"les systemes utilisés:");
			for(int i=0;i<liste_ex.size();i++) 
			{
				System.out.println(liste_ex.get(i));

			}
		}
		
	}
	
	
	}


