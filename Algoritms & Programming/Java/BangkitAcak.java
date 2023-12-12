package alpro;
import java.util.Random;
import java.util.random.*;
public class BangkitAcak {

	public static void main(String[] args) {
		Random acak = new Random();
		int n = acak.nextInt();
		System.out.println(" n = "+n);
		
		if (n<0)
			System.out.println("****n ,0");
			System.out.println("Selamat Jalan");	
		
			System.out.println("error");		
	}
}
