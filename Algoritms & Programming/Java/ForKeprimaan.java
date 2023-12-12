package alpro;
import java.util.Random;
public class ForKeprimaan {

	public static void main(String[] args) {
		Random acak = new Random();
		
		float x = acak.nextFloat();
		System.out.println("x = "+x);
		int n = (int)Math.floor(x*99+2);
		if (n<1) {
			n=n*10;
		}
		for (int d =2;d<n;d++) {
			if (n% d==0) {
				System.out.println(n+" bukan bilangan prima");
				return;
			}
			
		}System.out.println(n+" adalah prima");

	}

}
