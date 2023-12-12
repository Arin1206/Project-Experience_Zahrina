package alpro;

public class DemoCast {

	public static void main(String[] args) {
		byte b;
		int i= 257;
		double d = 323.142;
		
		System.out.println("Konversi dari int ke byte.");
		b= (byte)i;
		System.out.println("i dan b "+ i +" dan "+b);
		System.out.println("Konversi dari double ke int.");
		i= (int)d;
		System.out.println("d dan i "+ d +" dan "+i);
		System.out.println("Konversi dari double ke byte.");
		b= (byte)d;
		System.out.println("d dan b "+ d +" dan "+b);

	}

}
