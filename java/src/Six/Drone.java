package app;

public class Drone {
	private String ref;
	private boolean started;
	private int posX;
	private int posY;
	private int posZ;
	
	public Drone(String r) {
		ref = r;
		started = false;
		posX = 0;
		posY = 0;
		posZ = 0;
	}
	
	public String method1() {
		return ref;
	}
	public int method2() {
		return posX;
	}
	public int method3() {
		return posY;
	}
	public int method4() {
		return posZ;
	}
	public void method6() {
		started = false;
	}
	public void method7(int dX, int dY, int dZ) {
		if(started) {
			posX = posX + dX;
			posY = posY + dY;
			if (posZ + dZ >= 0) {
				posZ = posZ + dZ;
			}
			else {
				posZ = 0;
				System.out.println("Drone crashed !!!");
			}
		}
		else {
			System.out.println("Drone not started !!!");
		}
	}
	public int method8() {
		return (int)Math.sqrt(posX * posX + posY * posY + posZ * posZ);
	}
}
