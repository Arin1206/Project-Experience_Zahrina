package alpro;
import java.util.Random;
public class FordanBreak {

	public static void main(String[] args) {
		Random acak = new Random ();
		float x = acak.nextFloat();
		System.out.println("x = "+x);
		int n = (int)Math.floor(x*99+2);
		boolean apatidakprima=(n<2);
		for (int d=2;d<n;d++) {
			apatidakprima=(n%d==0);
			if (apatidakprima) break;
		}
		if (apatidakprima) System.out.println(n+" adalah bilangan tidak prima ");
		else System.out.println(n+" adalah bilangan prima");
	}

}
