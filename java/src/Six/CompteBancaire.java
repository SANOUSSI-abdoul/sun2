package app;

public class CompteBancaire 
{
private String name;
private double solde;
public CompteBancaire(String i, double km)
{
name = i;
this.solde = km;
}
public double getSolde()
{
	return solde;
}
public String getName()
{
	return name;
}
public void crediter(double credit){
solde = solde + credit;
}
public void debiter(double debit){
solde = solde - debit;
}
}
