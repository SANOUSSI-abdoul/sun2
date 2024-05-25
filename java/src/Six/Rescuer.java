package app;

public class Rescuer {
	private String name;
	private String firstName;
	private int age;
	private String speciality;
	
	public Rescuer(String n, String f, int a, String s) {
		name = n;
		firstName = f;
		age = a;
		speciality = s;
	}
	public String method1() {
		return name;
	}
	public String method2() {
		return firstName;
	}
	public int method3() {
		return age;
	}
	public String method4() {
		return speciality;
	}
	public void method5(String n) {
		this.name = n;
	}
	public void method6(String f) {
		this.firstName = f;
	}
	public void method7(int a) {
		this.age = a;
	}
	public void method8(String s) {
		this.speciality = s;
	}
	public void method9() {
		System.out.println(name + " " + firstName + " - " + age + " - " + speciality);
	}
}
